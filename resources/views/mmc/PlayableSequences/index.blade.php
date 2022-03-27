<manifest:PlayableSequences>
    @isset($data['PlayableSequences']['PlayableSequence'])
        @php
        $PlayableSequence = $data['PlayableSequences']['PlayableSequence']
        @endphp
        <manifest:PlayableSequence PlayableSequenceID="{{$PlayableSequence['@PlayableSequenceID']}}">
            @isset($PlayableSequence['Clip'])
                @foreach(@PlayableSequence['Clip'] as $Clip)
                    @isset($Clip)
                    <manifest:Clip sequence="{{$Clip['@sequence']}}">
                        <manifest:PresentationID>{{$Clip['PresentationID']}}</manifest:PresentationID>
                    </manifest:Clip>
                    @endisset
                @endforeach
            @endisset
        </manifest:PlayableSequence>
    @endisset
</manifest:PlayableSequences>