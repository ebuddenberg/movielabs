@php
    $Presentation = $data['Presentations'];
@endphp
<manifest:Presentations>
        <manifest:Presentation PresentationID="{{$Presentation['Presentation']['@PresentationID']}}">
            <manifest:TrackMetadata>
            @isset($Presentation['Presentation']['TrackMetadata'])

                @php
                $TackMetadata = $Presentation['Presentation']['TrackMetadata'];
                @endphp

                @isset($TackMetadata['TrackSelectionNumber'])
                    <manifest:TrackSelectionNumber>{{$TackMetadata['TrackSelectionNumber']}}</manifest:TrackSelectionNumber>
                @endisset

                @isset($TrackMeta['VideoTrackReference'])
                    <manifest:VideoTrackReference>
                        <manifest:VideoTrackID>{{$TackMetadata['VideoTrackReference']['VideoTrackID']}}</manifest:VideoTrackID>
                    </manifest:VideoTrackReference>
                @endisset

                @isset($TrackMeta['AudioTrackReference'])
                    <manifest:AudioTrackReference>
                        <manifest:AudioTrackID>{{$TackMetadata['AudioTrackReference']['AudioTrackID']}}</manifest:AudioTrackID>
                    </manifest:AudioTrackReference>
                @endisset
                
                @isset($TrackMeta['SubtitleTrackReference'])
                    <manifest:SubtitleTrackReference>
                        <manifest:SubtitleTrackID>{{$TackMetadata['SubtitleTrackReference']['SubtitleTrackID']}}</manifest:SubtitleTrackID>
                    </manifest:SubtitleTrackReference>
                @endisset
            </manifest:TrackMetadata>
            @endisset
        </manifest:Presentation>
</manifest:Presentations>