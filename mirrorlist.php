<?php
    $release = $_GET["release"];
    $arch = $_GET["arch"];
    $repo = $_GET["repo"];
    $infra = $_GET["infra"];

    echo "http://mirror.centos.org/centos/$release/$repo/$arch/";
?>