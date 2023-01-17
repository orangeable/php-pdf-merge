<?php
    $files = [
        "page-1.pdf",
        "page-2.pdf",
        "page-3.pdf"
    ];

    file_put_contents(getcwd() . "/pdf/merged.pdf", "");

    $command = "gs -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=" . getcwd() . "\\pdf\\merged.pdf ";

    foreach ($files as $file) {
        $command .= getcwd() . "\\pdf\\" . $file . " ";
    }

    $command .= "2>&1";

    echo $command;

    $result = shell_exec($command);

    echo $result;
?>
