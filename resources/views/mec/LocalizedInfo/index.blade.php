@isset($data['BasicMetadata-type']['LocalizedInfo'])
@foreach($data['BasicMetadata-type']['LocalizedInfo'] as $LocalizedInfo)
	<md:LocalizedInfo language="{{$LocalizedInfo['@Language']}}">
		<!-- TitleDisplayUnlimited is required by Amazon. Limited to 250 characters. -->
		<md:TitleDisplayUnlimited>{{$LocalizedInfo['TitleDisplayUnlimited']}}</md:TitleDisplayUnlimited>
		<!-- TitleSort is required by the MEC XSD, but is not used by Amazon. Blank fields such as below are acceptable.  -->
		<md:TitleSort></md:TitleSort>

		@foreach($LocalizedInfo['ArtReference'] as $ArtReference)
		<md:ArtReference  resolution="{{$ArtReference['@resolution']}}"  purpose="{{$ArtReference['@purpose']}}">{{$ArtReference['value']}}</md:ArtReference>
		@endforeach

		<!-- <md:ArtReference resolution="3840x2160" purpose="cover">TheGreatMovie-US-16x9.jpg</md:ArtReference>
		<md:ArtReference resolution="1920x2560" purpose="hero">TheGreatMovie-US-3x4.jpg</md:ArtReference> -->
		<!-- Summary190 is required by the MEC XSD, but is not required by Amazon. Blank fields such as below are acceptable.  -->
		<md:Summary190></md:Summary190>
		
		<!-- Summary400 is required by Amazon -->
		<md:Summary400>{{$LocalizedInfo['Summary400']}}</md:Summary400>
		
		<!-- Genres must be submitted using the AV Genre codes, such as below. -->
		<!-- Genres may be provided in just one, or all LocalizedInfo blocks. See the spec documentation for more detail. -->
		<!-- At least 1 genre is required. Up to 3 genres are allowed. -->
		@foreach($LocalizedInfo['Genre'] as $Genre)
			<md:Genre id="{{$Genre['@id']}}"></md:Genre>
		@endforeach
		<!-- <md:Genre id="av_subgenre_drama_suspense"></md:Genre>
		<md:Genre id="av_subgenre_drama_historical"></md:Genre> -->

	</md:LocalizedInfo>
	@endforeach
@endisset