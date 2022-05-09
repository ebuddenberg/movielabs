<manifest:Presentations>
    @php
        $Presentations = $data['Presentations'];
    @endphp
    @isset($Presentations)
        @foreach($Presentations as $Presentation)

            <manifest:Presentation PresentationID="{{$Presentation['@PresentationID']}}">
                @isset($Presentation['TrackMetadata'])

                <manifest:TrackMetadata>
                    @php
                    $TrackMetadata = $Presentation['TrackMetadata'];
                    @endphp
                    @isset($TrackMetadata['TrackSelectionNumber'])

                        <manifest:TrackSelectionNumber>{{$TrackMetadata['TrackSelectionNumber']}}</manifest:TrackSelectionNumber>
                    @endisset
                    @isset($TrackMetadata['VideoTrackReferences'])
                        @foreach($TrackMetadata['VideoTrackReferences'] as $VideoTrackReference)

                            <manifest:VideoTrackReference>
                                <manifest:VideoTrackID>{{$VideoTrackReference['VideoTrackID']}}</manifest:VideoTrackID>
                            </manifest:VideoTrackReference>
                        @endforeach
                    @endisset
                    @isset($TrackMetadata['AudioTrackReferences'])
                        @foreach($TrackMetadata['AudioTrackReferences'] as $AudioTrackReference)

                        <manifest:AudioTrackReference>
                            <manifest:AudioTrackID>{{$AudioTrackReference['AudioTrackID']}}</manifest:AudioTrackID>
                        </manifest:AudioTrackReference>
                        @endforeach
                    @endisset
                    @isset($TrackMetadata['SubtitleTrackReferences'])
                        @foreach($TrackMetadata['SubtitleTrackReferences'] as $SubtitleTrackReference)

                            <manifest:SubtitleTrackReference>
                                <manifest:SubtitleTrackID>{{$SubtitleTrackReference['SubtitleTrackID']}}</manifest:SubtitleTrackID>
                            </manifest:SubtitleTrackReference>
                        @endforeach
                    @endisset

                </manifest:TrackMetadata>
                @endisset

            </manifest:Presentation>
        @endforeach
    @endisset
</manifest:Presentations>