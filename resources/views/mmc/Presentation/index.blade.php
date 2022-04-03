@php
    $Presentations = $data['Presentations'];
@endphp
<manifest:Presentations>
    @foreach($Presentations as $Presentation)
        <manifest:Presentation PresentationID="{{$Presentation['@PresentationID']}}">
            <manifest:TrackMetadata>
            @isset($Presentation['TrackMetadata'])
                @php
                $TackMetadata = $Presentation['TrackMetadata'];
                @endphp

                @isset($TackMetadata['TrackSelectionNumber'])
                    <manifest:TrackSelectionNumber>{{$TackMetadata['TrackSelectionNumber']}}</manifest:TrackSelectionNumber>
                @endisset

                @isset($TrackMeta['VideoTrackReferences'])
                    @foreach($TrackMeta['VideoTrackReferences'] as $VideoTrackReference)
                        <manifest:VideoTrackReference>
                            <manifest:VideoTrackID>{{$VideoTrackReference['VideoTrackID']}}</manifest:VideoTrackID>
                        </manifest:VideoTrackReference>
                    @endforeach
                @endisset

                @isset($TrackMeta['AudioTrackReferences'])
                    @foreach($TrackMeta['AudioTrackReferences'] as $AudioTrackReference)
                    <manifest:AudioTrackReference>
                        <manifest:AudioTrackID>{{$AudioTrackReference['AudioTrackID']}}</manifest:AudioTrackID>
                    </manifest:AudioTrackReference>
                    @endforeach
                @endisset
                
                @isset($TrackMeta['SubtitleTrackReferences'])
                    @foreach($TrackMeta['SubtitleTrackReferences'] as $SubtitleTrackReference)
                        <manifest:SubtitleTrackReference>
                            <manifest:SubtitleTrackID>{{$SubtitleTrackReference['SubtitleTrackID']}}</manifest:SubtitleTrackID>
                        </manifest:SubtitleTrackReference>
                    @endforeach
                @endisset
            </manifest:TrackMetadata>
            @endisset
        </manifest:Presentation>
    @endforeach
</manifest:Presentations>