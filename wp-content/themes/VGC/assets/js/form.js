VGC.Form = (function () {
    var Form = function (formId, inputsRules) {
        var form = {};
        var ready = false;
        var isValid = false;

        this.formId = formId;
        this.params = [];
        this.submitButton;
        var errors = [];
        var classFor = {
            inputError: 'validation-failed',
            inputAdvice: 'validation-advice'
        };
        var errorMessages = {};

        var rules = {
            'lead[first_name]': ['required'],
            'lead[last_name]': ['required'],
            'lead[email]': ['required']
        };

        this.setForm = function (formId) {
            if (typeof(formId) != 'undefined') {
                form = $frm('#' + formId);
            }
        };
        this.setParams = function () {
            this.params = form.serializeArray();
        };
        this.setSubmitButton = function () {
            //this.submitButton = form.find('.button');
            this.submitButton = $frm('.buttons-set #btn_' + this.formId);
            var me = this;
            this.submitButton.click(function () {
                me.submit();
            });
        };
        this.setRules = function () {
            if (typeof(inputsRules) == 'object') {
                for (var key in inputsRules) {
                    var inputRules = inputsRules[key];
                    if (typeof(inputRules) == 'object') {
                        for (var idx in inputRules) {
                            var ruleType = inputRules[idx];
                            if ($frm.inArray(ruleType, rules[key]) < 0) {
                                if (typeof(rules[key]) !== 'undefined') {
                                    rules[key].unshift(ruleType);
                                }
                                else {
                                    rules[key] = [ruleType];
                                }
                            }
                        }
                    }
                }
            }
        };
        this.init = function () {
            this.setForm(formId);
            this.setRules();
            this.setSubmitButton();
        };
        this.preSubmit = function () {
            this.setParams();
            this.validate();
        };
        this.submit = function () {
            this.preSubmit();
            if (isValid) {
                form.submit();
            }
        };
        this.ready = function () {
            return ready = (form.length > 0 && this.params.length > 0);
        };
        this.validate = function () {
            if (this.ready()) {
                for (var key in this.params) {
                    var input = this.params[key];
                    showValidateResult(input.name, checkInput(input.name));
                }
                if (errors.length > 0) {
                    isValid = false;
                }
                else {
                    isValid = true;
                }
            }
            else {
                isValid = false;
            }
        };

        var showValidateResult = function (inputName, validInput) {
            if (validInput === false) {
                setError(inputName);
                addErrorClass(inputName);
                showAdvice(inputName, errorMessages[inputName]);
            }
            else {
                unsetError(inputName);
                removeErrorClass(inputName);
                hideAdvice(inputName);
            }
        };
        var setError = function (inputName) {
            errors.push(inputName);
        };
        var unsetError = function (inputName) {
            var index = errors.indexOf(inputName);
            if (index > -1) {
                errors.splice(index, 1);
            }
        };
        var addErrorClass = function (inputName) {
            var input = form.find('[name="' + inputName + '"]');
            input.addClass(classFor.inputError);
        };
        var removeErrorClass = function (inputName) {
            var input = form.find('[name="' + inputName + '"]');
            input.removeClass(classFor.inputError);
        };
        var showAdvice = function (inputName, message) {
            var input = form.find('[name="' + inputName + '-advice"]');
            input.html(message);
            input.show();
        };
        var hideAdvice = function (inputName) {
            var input = form.find('[name="' + inputName + '-advice"]');
            input.html('');
            input.hide();
        };
        var hasError = function (inputName) {
            if ($frm.inArray(inputName, this.errors) > 0)
                return true;
            else
                return false;
        };

        var getInput = function (inputName) {
            var input = form.find('[name="' + inputName + '"]');
            if (input.length > 0) {
                return input;
            }
            else {
                return null;
            }
        };
        var checkInput = function (inputName) {
            if (typeof(rules[inputName]) != 'undefined') {
                for (var idx = 0; idx < rules[inputName].length; idx++) {
                    var ruleType = rules[inputName][idx];
                    switch (ruleType) {
                        case 'email':
                            return checkEmail(inputName);
                            break;
                        case 'password':
                            return checkPassword(inputName);
                            break;
                        case 'match':
                            return checkPasswordMatch(inputName);
                            break;
                        case 'required':
                            return checkRequired(inputName);
                            break
                    }
                }
            }
            else {
                return true;
            }
        };

        var checkPassword = function (inputName) {
            var input = getInput(inputName);
            var val = input.val();
            var regex = /^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$/;
            return regex.test(val);
        };
        var checkPasswordMatch = function (inputName) {
            var input = getInput(inputName);
            var val = input.val();
            return (!VGC.Utils.isEmpty(val) && (val == getInput('lead[password]').val()));
        };
        var checkEmail = function (inputName) {
            var input = getInput(inputName);
            var val = input.val();
            if (VGC.Utils.isEmail(val)) {
                return true;
            } else {
                errorMessages[inputName] = "Enter a valid email address.";
                return false;
            }
        };

        var checkRequired = function (inputName) {
            var input = getInput(inputName);
            if (!VGC.Utils.isEmpty(input.val())) {
                return true;
            }
            else {
                errorMessages[inputName] = "This is a required field.";
                return false;
            }
        };

        this.init();
    };

    return Form;
})();