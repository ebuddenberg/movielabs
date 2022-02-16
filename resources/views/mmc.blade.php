<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<manifest:MediaManifest xmlns:manifest="http://www.movielabs.com/schema/manifest/v1.5/manifest" xmlns:md="http://www.movielabs.com/schema/md/v2.4/md" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.movielabs.com/schema/manifest/v1.5/manifest manifest-v1.5.xsd">
    <manifest:Compatibility>
        <manifest:SpecVersion>{{$data['Compatibility']['SpecVersion']}}</manifest:SpecVersion>
        <manifest:Profile>{{$data['Compatibility']['Profile']}}</manifest:Profile>
    </manifest:Compatibility>
    <manifest:Inventory>
        <!-- HDR mezz file reference -->
        <manifest:Video VideoTrackID="{{$data['Inventory']['Video']['@VideoTrackID']}}">
            <md:Type>{{$data['Inventory']['Video']['Type']}}</md:Type>
            <md:Picture>
                <md:AspectRatio>{{$data['Inventory']['Video']['Picture']['AspectRatio']}}</md:AspectRatio>
                <md:WidthPixels>{{$data['Inventory']['Video']['Picture']['WidthPixels']}}</md:WidthPixels>
                <md:HeightPixels>{{$data['Inventory']['Video']['Picture']['HeightPixels']}}</md:HeightPixels>
                
                <!-- HDR-10 metadata is required in the manifest -->
                <md:MasteredColorVolume>
                    <md:PrimaryRChromaticity>
                        <md:ChromaticityCIEx>{{$data['Inventory']['Video']['Picture']['MasteredColorVolume']['PrimaryRChromaticity']['ChromaticityCIEx']}}</md:ChromaticityCIEx>
                        <md:ChromaticityCIEy>{{$data['Inventory']['Video']['Picture']['MasteredColorVolume']['PrimaryRChromaticity']['ChromaticityCIEy']}}</md:ChromaticityCIEy>
                    </md:PrimaryRChromaticity>
                    <md:PrimaryGChromaticity>
                        <md:ChromaticityCIEx>{{$data['Inventory']['Video']['Picture']['MasteredColorVolume']['PrimaryGChromaticity']['ChromaticityCIEx']}}</md:ChromaticityCIEx>
                        <md:ChromaticityCIEy>{{$data['Inventory']['Video']['Picture']['MasteredColorVolume']['PrimaryGChromaticity']['ChromaticityCIEy']}}</md:ChromaticityCIEy>
                    </md:PrimaryGChromaticity>
                    <md:PrimaryBChromaticity>
                        <md:ChromaticityCIEx>{{$data['Inventory']['Video']['Picture']['MasteredColorVolume']['PrimaryBChromaticity']['ChromaticityCIEx']}}</md:ChromaticityCIEx>
                        <md:ChromaticityCIEy>{{$data['Inventory']['Video']['Picture']['MasteredColorVolume']['PrimaryBChromaticity']['ChromaticityCIEy']}}</md:ChromaticityCIEy>
                    </md:PrimaryBChromaticity>
                    <md:WhitePointChromaticity>
                        <md:ChromaticityCIEx>{{$data['Inventory']['Video']['Picture']['MasteredColorVolume']['WhitePointChromaticity']['ChromaticityCIEx']}}</md:ChromaticityCIEx>
                        <md:ChromaticityCIEy>{{$data['Inventory']['Video']['Picture']['MasteredColorVolume']['WhitePointChromaticity']['ChromaticityCIEy']}}</md:ChromaticityCIEy>
                    </md:WhitePointChromaticity>
                    <md:LuminanceMin>{{$data['Inventory']['Video']['Picture']['MasteredColorVolume']['LuminanceMin']}}</md:LuminanceMin>
                    <md:LuminanceMax>{{$data['Inventory']['Video']['Picture']['MasteredColorVolume']['LuminanceMax']}}</md:LuminanceMax>
                </md:MasteredColorVolume>
                <md:LightLevel>
                    <md:ContentMax>{{$data['Inventory']['Video']['Picture']['LightLevel']['ContentMax']}}</md:ContentMax>
                    <md:FrameAverageMax>{{$data['Inventory']['Video']['Picture']['LightLevel']['FrameAverageMax']}}</md:FrameAverageMax>
                </md:LightLevel>
            </md:Picture>
            <md:Language>{{$data['Inventory']['Video']['Language']}}</md:Language>
            <manifest:ContainerReference>
                <manifest:ContainerLocation>{{$data['Inventory']['Video']['ContainerReference']['ContainerLocation']}}</manifest:ContainerLocation>
            </manifest:ContainerReference>
        </manifest:Video>
        
        <!-- Embedded audio in the HDR file -->
        
        <manifest:Audio AudioTrackID="{{$data['Inventory']['Audio']['@AudioTrackID']}}">
            <md:Type>{{$data['Inventory']['Audio']['Type']}}</md:Type>
            <md:Language>{{$data['Inventory']['Audio']['Language']}}</md:Language>
            <manifest:ContainerReference>
                <manifest:ContainerLocation>{{$data['Inventory']['Audio']['ContainerReference']['ContainerLocation']}}</manifest:ContainerLocation>
            </manifest:ContainerReference>
        </manifest:Audio>
        
        <!-- SDR mezz file reference -->
        
        <!-- <manifest:Video VideoTrackID="md:vidtrackid:org:amazon_studios:MIHC_101_STM:episode.video">
            <md:Type>primary</md:Type>
            <md:Picture>
                <md:AspectRatio>16:9</md:AspectRatio>
                <md:WidthPixels>3840</md:WidthPixels>
                <md:HeightPixels>2160</md:HeightPixels>
            </md:Picture>
            <md:Language>en-US</md:Language>
            <manifest:ContainerReference>
                <manifest:ContainerLocation>file://MIHC-101-SDR.mov</manifest:ContainerLocation>
            </manifest:ContainerReference>
        </manifest:Video> -->
        
        <!-- Embedded audio in the SDR file -->
        
        <!-- <manifest:Audio AudioTrackID="md:audtrackid:org:amazon_studios:MIHC_101_STM:episode.audio.en-US">
            <md:Type>primary</md:Type>
            <md:Language>en-US</md:Language>
            <manifest:ContainerReference>
                <manifest:ContainerLocation>file://MIHC-101-SDR.mov</manifest:ContainerLocation>
            </manifest:ContainerReference>
        </manifest:Audio> -->
        
        <!-- All subtitles must conform to both the HDR and SDR -->
        
        <manifest:Subtitle SubtitleTrackID="{{$data['Inventory']['Subtitle']['@SubtitleTrackID']}}">
            <md:Format>{{$data['Inventory']['Subtitle']['Format']}}</md:Format>
            <md:Type>{{$data['Inventory']['Subtitle']['Type']}}</md:Type>
            <md:Language>{{$data['Inventory']['Subtitle']['Language']}}</md:Language>
            <md:Encoding>
                <md:FrameRate 
                    multiplier="{{$data['Inventory']['Subtitle']['Encoding']['FrameRate']['@multiplier']}}" 
                    timecode="{{$data['Inventory']['Subtitle']['Encoding']['FrameRate']['@timecode']}}">
                    {{$data['Inventory']['Subtitle']['Encoding']['FrameRate']['value']}}
                </md:FrameRate>
            </md:Encoding>
            <manifest:ContainerReference>
                <manifest:ContainerLocation>{{$data['Inventory']['Subtitle']['ContainerReference']['ContainerLocation']}}</manifest:ContainerLocation>
            </manifest:ContainerReference>
        </manifest:Subtitle>
        
        <!-- <manifest:Subtitle SubtitleTrackID="md:subtrackid:org:amazon_studios:MIHC_101_STM:episode.ClosedCaption.en-US">
            <md:Format>SCC</md:Format>
            <md:Type>SDH</md:Type>
            <md:Language>en-US</md:Language>
            <md:Encoding>
                <md:FrameRate multiplier="1000/1001" timecode="NonDrop">24</md:FrameRate>
            </md:Encoding>
            <manifest:ContainerReference>
                <manifest:ContainerLocation>file://MIHC-101-subtitle-en-US.scc</manifest:ContainerLocation>
            </manifest:ContainerReference>
        </manifest:Subtitle>
        <manifest:Subtitle SubtitleTrackID="md:subtrackid:org:amazon_studios:MIHC_101_STM:episode.Subtitle.it-IT">
            <md:Format>ITT</md:Format>
            <md:Type>normal</md:Type>
            <md:Language>it-IT</md:Language>
            <md:Encoding>
                <md:FrameRate multiplier="1000/1001" timecode="NonDrop">24</md:FrameRate>
            </md:Encoding>
            <manifest:ContainerReference>
                <manifest:ContainerLocation>file://MIHC-101-subtitle-it-IT.itt</manifest:ContainerLocation>
            </manifest:ContainerReference>
        </manifest:Subtitle> -->
    </manifest:Inventory>
    
    <!-- Presentation section -->
    <!-- Both the HDR and the SDR video tracks are referenced in the same presentation -->
    <!-- All subtitles and additional audio files must conform to both the HDR and SDR mezz files -->
    
    <manifest:Presentations>
        <manifest:Presentation PresentationID="{{$data['Presentations']['Presentation']['@PresentationID']}}">
            <manifest:TrackMetadata>
                <manifest:TrackSelectionNumber>{{$data['Presentations']['Presentation']['TrackMetadata']['TrackSelectionNumber']}}</manifest:TrackSelectionNumber>
                <manifest:VideoTrackReference>
                    <manifest:VideoTrackID>{{$data['Presentations']['Presentation']['TrackMetadata']['VideoTrackReference']['VideoTrackID']}}</manifest:VideoTrackID>
                </manifest:VideoTrackReference>
                <manifest:AudioTrackReference>
                    <manifest:AudioTrackID>{{$data['Presentations']['Presentation']['TrackMetadata']['AudioTrackReference']['AudioTrackID']}}</manifest:AudioTrackID>
                <!-- </manifest:AudioTrackReference>
                <manifest:VideoTrackReference>
                    <manifest:VideoTrackID>md:vidtrackid:org:amazon_studios:MIHC_101_STM:episode.video</manifest:VideoTrackID>
                </manifest:VideoTrackReference>
                <manifest:AudioTrackReference>
                    <manifest:AudioTrackID>md:audtrackid:org:amazon_studios:MIHC_101_STM:episode.audio.en-US</manifest:AudioTrackID>
                </manifest:AudioTrackReference> -->
                <manifest:SubtitleTrackReference>
                    <manifest:SubtitleTrackID>{{$data['Presentations']['Presentation']['TrackMetadata']['SubtitleTrackReference']['SubtitleTrackID']}}</manifest:SubtitleTrackID>
                </manifest:SubtitleTrackReference>
                <!-- <manifest:SubtitleTrackReference>
                    <manifest:SubtitleTrackID>md:subtrackid:org:amazon_studios:MIHC_101_STM:episode.ClosedCaption.en-US</manifest:SubtitleTrackID>
                </manifest:SubtitleTrackReference>
                <manifest:SubtitleTrackReference>
                    <manifest:SubtitleTrackID>md:subtrackid:org:amazon_studios:MIHC_101_STM:episode.Subtitle.it-IT</manifest:SubtitleTrackID>
                </manifest:SubtitleTrackReference> -->
            </manifest:TrackMetadata>
        </manifest:Presentation>
    </manifest:Presentations>
    
    <!-- Playable Sequences -->
    
    <manifest:PlayableSequences>
        <manifest:PlayableSequence PlayableSequenceID="{{$data['PlayableSequences']['PlayableSequence']['@PlayableSequenceID']}}">
            <manifest:Clip sequence="{{$data['PlayableSequences']['PlayableSequence']['Clip']['@sequence']}}">
                <manifest:PresentationID>{{$data['PlayableSequences']['PlayableSequence']['Clip']['PresentationID']}}</manifest:PresentationID>
            </manifest:Clip>
        </manifest:PlayableSequence>
    </manifest:PlayableSequences>
    
    <!-- Expereinces -->
    
    <manifest:Experiences>
        <manifest:Experience 
            ExperienceID="{{$data['Experiences']['Experience']['@ExperienceID']}}" 
            version="{{$data['Experiences']['Experience']['@version']}}">
            <manifest:Audiovisual ContentID="{{$data['Experiences']['Experience']['Audiovisual']['@ContentID']}}">
                <manifest:Type>{{$data['Experiences']['Experience']['Audiovisual']['Type']}}</manifest:Type>
                <manifest:SubType>{{$data['Experiences']['Experience']['Audiovisual']['SubType']}}</manifest:SubType>
                <manifest:PlayableSequenceID>{{$data['Experiences']['Experience']['Audiovisual']['PlayableSequenceID']}}</manifest:PlayableSequenceID>
            </manifest:Audiovisual>
        </manifest:Experience>
    </manifest:Experiences>
    
    <!-- ALIDExperienceMap -->
    
    <manifest:ALIDExperienceMaps>
        <manifest:ALIDExperienceMap>
            <manifest:ALID>{{$data['ALIDExperienceMaps']['ALIDExperienceMap']['ALID']}}</manifest:ALID>
            <manifest:ExperienceID>{{$data['ALIDExperienceMaps']['ALIDExperienceMap']['ExperienceID']}}</manifest:ExperienceID>
        </manifest:ALIDExperienceMap>
    </manifest:ALIDExperienceMaps>
</manifest:MediaManifest>