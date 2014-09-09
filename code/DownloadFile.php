<?php

class DownloadFile extends DataObject {

    private static $db             = array(
        "SortID"      => "Int",
        "Title"       => "Text",
        "Description" => "Text",
    );
    private static $has_one        = array(
        "DownloadsWidget" => "DownloadsWidget",
        "File"            => "File"
    );
    private static $summary_fields = array(
        "Title" => "Title",
    );

}
