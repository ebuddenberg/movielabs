<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<manifest:MediaManifest xmlns:manifest="http://www.movielabs.com/schema/manifest/v1.5/manifest" xmlns:md="http://www.movielabs.com/schema/md/v2.4/md" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.movielabs.com/schema/manifest/v1.5/manifest manifest-v1.5.xsd">
<manifest:Compatibility>
<manifest:SpecVersion>1.5</manifest:SpecVersion>
<manifest:Profile>MMC-1</manifest:Profile>
</manifest:Compatibility>
<!-- Inventory Section -->
@include('mmc/Inventories/index', $data)

<!--  Presentation Section  -->
@include('mmc/Presentation/index', $data)

<!--  Experiences Section   -->
@include('mmc/Experiences/index', $data)

<!--  ALID Experience Maps Section   -->
@include('mmc/ALIDExperienceMaps/index', $data)

</manifest:MediaManifest>