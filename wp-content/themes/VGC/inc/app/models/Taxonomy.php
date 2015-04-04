<?php
namespace app\models;


class Taxonomy
{
    private $labelNames = array('all_items','edit_item','view_item','update_item','add_new_item','new_item_item','not_found');

    public $name;
    public $objectType;
    public $label;
    public $labelPlural;
    protected $labels = array();

    public function __construct()
    {

    }

    private function isValid()
    {
        if (empty($this->name) || empty($this->objectType)) {
            return false;
        }
        else {
            return true;
        }
    }

    public function setLabels($labels = array())
    {

        if (empty($labels)) {
            foreach ($this->labelNames as $labelName) {
                $labelValue = ucwords(preg_replace('/(\\_)/', ' ',$labelName));
                $labelValue = preg_replace('/(item)/', $this->label, $labelValue);
                $this->labels[$labelName] = $labelValue;
            }
        }
        else {
            foreach ($labels as $labelName=>$labelValue) {
                if (in_array($labelName, $this->labelNames)) {
                    $this[$labelName] = $labelValue;
                }
            }
        }
    }
    public function setAttribute($name, $value) {
        $this->{$name} = $value;
    }
    public function setAttributes($attributes = array())
    {
        $this->name = \app\helpers\Utils::arrayGet('name',$attributes,'');
        $this->label = \app\helpers\Utils::arrayGet('label',$attributes,ucfirst($this->name));
        $this->labelPlural = \app\helpers\Utils::arrayGet('label_plural',$attributes,$this->label.'s');
        $this->objectType = \app\helpers\Utils::arrayGet('object_type',$attributes,'');
    }
    public function register()
    {
        if (! $this->isValid()) {
            return false;
        }

        if (empty($this->labels)) {
            $this->setLabels();
        }

        register_taxonomy(
            $this->name,
            $this->objectType,
            array(
                'label' => __( $this->labelPlural ),
                'labels' => $this->labels,
                'show_ui' => true,
                'show_admin_column' => true,
                'hierarchical' => true,
                'query_var', true,
                'rewrite' => array( 'slug' => $this->name )
            )
        );
    }

    public function addInit()
    {
        add_action('init', array($this,'register'));
    }
}