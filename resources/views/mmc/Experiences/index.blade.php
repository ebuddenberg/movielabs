@isset($data['Experiences'])
@foreach($data['Experiences'] as $Experience)
@isset($Experience)
<manifest:Experiences>
<manifest:Experience ExperienceID="{{$Experience['@ExperienceID']}}" version="{{$Experience['@version']}}">
<manifest:Audiovisual ContentID="{{$Experience['Audiovisual']['@ContentID']}}">
<manifest:Type>{{$Experience['Audiovisual']['Type']}}</manifest:Type>
<manifest:SubType>{{$Experience['Audiovisual']['SubType']}}</manifest:SubType>
<manifest:PlayableSequenceID>{{$Experience['Audiovisual']['PresentationID']}}</manifest:PlayableSequenceID>
</manifest:Audiovisual>
</manifest:Experience>
</manifest:Experiences>
@endisset
@endforeach
@endisset