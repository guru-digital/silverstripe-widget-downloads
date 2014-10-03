<?php

class DownloadsWidget extends Widget {

    private static $db       = array(
    );
    private static $has_many = array(
        "Files" => "DownloadFile"
    );

    /**
     * @var string
     */
    private static $title = "Downloads Widget";

    /**
     * @var string
     */
    private static $cmsTitle = "Widget to list downloads";

    /**
     * @var string
     */
    private static $description = "Add Downloads to your pages.";

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab("Root.Main", new TextField('WidgetLabel', 'Widget Label'), "Enabled");
        $fields->addFieldToTab("Root.Main", new TextField('WidgetName', 'Widget Name'), "Enabled");
        $downloadsField = TextField::create('Downloads')->setTitle('Downloads')->setDisabled(true)->setValue('You can add downloads once you have saved the record for the first time.');
        if ($this->ID) {
            $BulkUploadComponent = new GridFieldBulkUpload("File");
//            $BulkUploadComponent->setConfig('folderName', "DownloadsWidget");
            $downloadsField      = new GridField(
                    "Downloads", "Downloads", $this->Files(), GridFieldConfig::create()
                            ->addComponent(new GridFieldToolbarHeader())
                            ->addComponent(new GridFieldAddNewButton("toolbar-header-right"))
                            ->addComponent(new GridFieldSortableHeader())
                            ->addComponent(new GridFieldDataColumns())
                            ->addComponent(new GridFieldPaginator(50))
                            ->addComponent(new GridFieldEditButton())
                            ->addComponent(new GridFieldDeleteAction())
                            ->addComponent(new GridFieldDetailForm())
                            ->addComponent(new GridFieldFilterHeader())
                            ->addComponent(new GridFieldBulkManager())
                            ->addComponent($BulkUploadComponent)
            );
        }
        $fields->addFieldToTab("Root.Main", $downloadsField);

        return $fields;
    }

    public function Title() {
        return $this->WidgetLabel;
    }

}
