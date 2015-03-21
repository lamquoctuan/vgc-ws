<?php
/**
 * Created by PhpStorm.
 * User: tuanlam
 * Date: 3/21/15
 * Time: 9:31 AM
 */
?>
<form id="search_mini_form" action="/" method="get">
    <div class="form-search">
        <label for="search">Search:</label>
        <div class="box-select">
            <div class="header-select">
<!--                <select class="selectpicker" id="cat" name="cat" style="display: none;">-->
<!--                    <option value="">Categories</option>-->
<!--                    <option value="3">Bracelets1</option>-->
<!--                    <option value="4">Earrings</option>-->
<!--                    <option value="5">Necklaces</option>-->
<!--                    <option value="6">Rings</option>-->
<!--                    <option value="7">Watches</option>-->
<!--                    <option value="8">Wedding</option>-->
<!--                </select>-->
                <div class="btn-group bootstrap-select">
                    <button type="button" class="btn dropdown-toggle selectpicker btn-default" data-toggle="dropdown" data-id="cat" title="Categories">
                        <span class="filter-option pull-left">Categories</span>&nbsp;<span class="caret"></span>
                    </button>
                    <div class="dropdown-menu open">
                        <ul class="dropdown-menu inner selectpicker" role="menu">
                            <li rel="0" class="selected"><a tabindex="0" class="" style=""><span class="text">Categories</span></a>
                            </li>
                            <li rel="1"><a tabindex="0" class="" style=""><span class="text">Bracelets2</span></a>
                            </li>
                            <li rel="2"><a tabindex="0" class="" style=""><span class="text">Earrings</span></a>
                            </li>
                            <li rel="3"><a tabindex="0" class="" style=""><span class="text">Necklaces</span></a>
                            </li>
                            <li rel="4"><a tabindex="0" class="" style=""><span class="text">Rings</span></a>
                            </li>
                            <li rel="5"><a tabindex="0" class="" style=""><span class="text">Watches</span></a>
                            </li>
                            <li rel="6"><a tabindex="0" class="" style=""><span class="text">Wedding</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-input">
            <input id="search" type="text" name="s" class="input-text" autocomplete="off" value="<?php the_search_query(); ?>">
            <input id="cat" type="hidden" name="c" class="input-text" autocomplete="off" value="1">
        </div>
        <button type="submit" title="Search" class="button"><span><span>Search</span></span></button>
    </div>
</form>
<script type="text/javascript">
    //<![CDATA[
    var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search entire store here...');
    searchForm.initAutocomplete('', 'search_autocomplete');
    //]]>
</script>