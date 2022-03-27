<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<manifest:MediaManifest xmlns:manifest="http://www.movielabs.com/schema/manifest/v1.5/manifest" xmlns:md="http://www.movielabs.com/schema/md/v2.4/md" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.movielabs.com/schema/manifest/v1.5/manifest manifest-v1.5.xsd">
    <manifest:Compatibility>
        <manifest:SpecVersion>1.5</manifest:SpecVersion>
		<manifest:Profile>MMC-1</manifest:Profile>
    </manifest:Compatibility>
    <manifest:Inventory>
    @include('mmc/Inventories/index', $data)
    @include('mmc/Presentation/index', $data)
    @include('mmc/PlayableSequences/index', $data)
    @include('mmc/Experiences/index', $data)
    @include('mmc/ALIDExperienceMaps/index', $data)
</manifest:MediaManifest>