<manifest:Inventory>
    @foreach($data['Inventories'] as $Inventory)
        <!-- Feature Mezz File -->
        <manifest:Video VideoTrackID="{{$Inventory['Video']['@VideoTrackID']}}">
            <md:Type>{{$Inventory['Video']['Type']}}</md:Type>
            <md:Picture>
                <md:WidthPixels>{{$Inventory['Video']['Picture']['WidthPixels']}}</md:WidthPixels>
                <md:HeightPixels>{{$Inventory['Video']['Picture']['HeightPixels']}}</md:HeightPixels>
                <md:Progressive>true</md:Progressive>
                
                <!-- HDR-10 metadata is required in the manifest -->
                <!-- <md:MasteredColorVolume>
                    <md:PrimaryRChromaticity>
                        <md:ChromaticityCIEx>{{$Inventory['Video']['Picture']['MasteredColorVolume']['PrimaryRChromaticity']['ChromaticityCIEx']}}</md:ChromaticityCIEx>
                        <md:ChromaticityCIEy>{{$Inventory['Video']['Picture']['MasteredColorVolume']['PrimaryRChromaticity']['ChromaticityCIEy']}}</md:ChromaticityCIEy>
                    </md:PrimaryRChromaticity>
                    <md:PrimaryGChromaticity>
                        <md:ChromaticityCIEx>{{$Inventory['Video']['Picture']['MasteredColorVolume']['PrimaryGChromaticity']['ChromaticityCIEx']}}</md:ChromaticityCIEx>
                        <md:ChromaticityCIEy>{{$Inventory['Video']['Picture']['MasteredColorVolume']['PrimaryGChromaticity']['ChromaticityCIEy']}}</md:ChromaticityCIEy>
                    </md:PrimaryGChromaticity>
                    <md:PrimaryBChromaticity>
                        <md:ChromaticityCIEx>{{$Inventory['Video']['Picture']['MasteredColorVolume']['PrimaryBChromaticity']['ChromaticityCIEx']}}</md:ChromaticityCIEx>
                        <md:ChromaticityCIEy>{{$Inventory['Video']['Picture']['MasteredColorVolume']['PrimaryBChromaticity']['ChromaticityCIEy']}}</md:ChromaticityCIEy>
                    </md:PrimaryBChromaticity>
                    <md:WhitePointChromaticity>
                        <md:ChromaticityCIEx>{{$Inventory['Video']['Picture']['MasteredColorVolume']['WhitePointChromaticity']['ChromaticityCIEx']}}</md:ChromaticityCIEx>
                        <md:ChromaticityCIEy>{{$Inventory['Video']['Picture']['MasteredColorVolume']['WhitePointChromaticity']['ChromaticityCIEy']}}</md:ChromaticityCIEy>
                    </md:WhitePointChromaticity>
                    <md:LuminanceMin>{{$Inventory['Video']['Picture']['MasteredColorVolume']['LuminanceMin']}}</md:LuminanceMin>
                    <md:LuminanceMax>{{$Inventory['Video']['Picture']['MasteredColorVolume']['LuminanceMax']}}</md:LuminanceMax>
                </md:MasteredColorVolume>
                <md:LightLevel>
                    <md:ContentMax>{{$Inventory['Video']['Picture']['LightLevel']['ContentMax']}}</md:ContentMax>
                    <md:FrameAverageMax>{{$Inventory['Video']['Picture']['LightLevel']['FrameAverageMax']}}</md:FrameAverageMax>
                </md:LightLevel> -->
            </md:Picture>
            <md:Language>{{$Inventory['Video']['Language']}}</md:Language>
            <manifest:ContainerReference>
                <manifest:ContainerLocation>{{$Inventory['Video']['ContainerReference']['ContainerLocation']}}</manifest:ContainerLocation>
            </manifest:ContainerReference>
        </manifest:Video>

        <!-- Audio for the feature - this is embedded in the feature mezz file -->
        <manifest:Audio AudioTrackID="{{$Inventory['Audio']['@AudioTrackID']}}">
            <md:Type>{{$Inventory['Audio']['Type']}}</md:Type>
            <md:Language>{{$Inventory['Audio']['Language']}}</md:Language>
            <manifest:ContainerReference>
                <manifest:ContainerLocation>{{$Inventory['Audio']['ContainerReference']['ContainerLocation']}}</manifest:ContainerLocation>
            </manifest:ContainerReference>
        </manifest:Audio>

        <!-- Feature subtitle File -->
        <manifest:Subtitle SubtitleTrackID="{{$Inventory['Subtitle']['@SubtitleTrackID']}}">
            <!-- <md:Format>{{$Inventory['Subtitle']['Format']}}</md:Format> -->
            <md:Format>STL</md:Format>
            <md:Type>{{$Inventory['Subtitle']['Type']}}</md:Type>
            <md:Language>{{$Inventory['Subtitle']['Language']}}</md:Language>
            <md:Encoding>
                <md:FrameRate 
                    multiplier="{{$Inventory['Subtitle']['Encoding']['FrameRate']['@multiplier']}}" 
                    timecode="{{$Inventory['Subtitle']['Encoding']['FrameRate']['@timecode']}}">
                    {{$Inventory['Subtitle']['Encoding']['FrameRate']['value']}}
                </md:FrameRate>
            </md:Encoding>
            <manifest:ContainerReference>
                <manifest:ContainerLocation>{{$Inventory['Subtitle']['ContainerReference']['ContainerLocation']}}</manifest:ContainerLocation>
            </manifest:ContainerReference>
        </manifest:Subtitle>
    @endforeach
</manifest:Inventory>