<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<mdmec:CoreMetadata xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
 xsi:schemaLocation="http://www.movielabs.com/schema/mdmec/v2.9 ../mdmec-v2.9.xsd"1
 xmlns:md="http://www.movielabs.com/schema/md/v2.9/md"
 xmlns:mdmec="http://www.movielabs.com/schema/mdmec/v2.9">
	
	<mdmec:Basic ContentID="{{$data['BasicMetadata-type']['@ContentID']}}">
		<md:LocalizedInfo language="{{$data['BasicMetadata-type']['LocalizedInfo']['@Language']}}">
			<!-- TitleDisplayUnlimited is required by Amazon. Limited to 250 characters. -->
			<md:TitleDisplayUnlimited>{{$data['BasicMetadata-type']['LocalizedInfo']['TitleDisplayUnlimited']}}</md:TitleDisplayUnlimited>
			<!-- TitleSort is required by the MEC XSD, but is not used by Amazon. Blank fields such as below are acceptable.  -->
			<md:TitleSort></md:TitleSort>
			<md:ArtReference 
				resolution="{{$data['BasicMetadata-type']['LocalizedInfo']['ArtReference']['@resolution']}}" 
				purpose="{{$data['BasicMetadata-type']['LocalizedInfo']['ArtReference']['@purpose']}}">
				{{$data['BasicMetadata-type']['LocalizedInfo']['ArtReference']['value']}}</md:ArtReference>
			<!-- <md:ArtReference resolution="3840x2160" purpose="cover">TheGreatMovie-US-16x9.jpg</md:ArtReference>
			<md:ArtReference resolution="1920x2560" purpose="hero">TheGreatMovie-US-3x4.jpg</md:ArtReference> -->
			<!-- Summary190 is required by the MEC XSD, but is not required by Amazon. Blank fields such as below are acceptable.  -->
			<md:Summary190></md:Summary190>
			
			<!-- Summary400 is required by Amazon -->
			<md:Summary400>{{$data['BasicMetadata-type']['LocalizedInfo']['Summary400']}}</md:Summary400>
			
			<!-- Genres must be submitted using the AV Genre codes, such as below. -->
			<!-- Genres may be provided in just one, or all LocalizedInfo blocks. See the spec documentation for more detail. -->
			<!-- At least 1 genre is required. Up to 3 genres are allowed. -->
			<md:Genre id="{{$data['BasicMetadata-type']['LocalizedInfo']['Genre']['@id']}}"></md:Genre>
			<!-- <md:Genre id="av_subgenre_drama_suspense"></md:Genre>
			<md:Genre id="av_subgenre_drama_historical"></md:Genre> -->

		</md:LocalizedInfo>

		<!-- <md:LocalizedInfo language="de-DE">
			<md:TitleDisplayUnlimited>Die neue Welt </md:TitleDisplayUnlimited>
			<md:TitleSort></md:TitleSort>
			<md:Summary190></md:Summary190>
			<md:Summary400>1962. Deutschland und Japan haben den Krieg gewonnen und Amerika unter sich aufgeteilt. In den Japanischen Pazifikstaaten wird Juliana Crains Schwester Trudy auf der Straße erschossen, kurz nachdem sie ihr eine mysteriöse Filmrolle übergeben hat. Währenddessen schließt sich im Großdeutschen Reich an der Ostküste der junge Joe Blake dem Widerstand an.</md:Summary400>
		</md:LocalizedInfo>
		<md:LocalizedInfo language="ja-JP">
			<md:TitleDisplayUnlimited>新世界 </md:TitleDisplayUnlimited>
			<md:TitleSort></md:TitleSort>
			<md:Summary190></md:Summary190>
			<md:Summary400>1962年、第２次世界大戦はアメリカの敗北に終わり、国土の東側は大ナチス帝国、西側は日本太平洋合衆国の統治下に置かれた。両国による圧政の最中、違う世界を映し出したフィルムが新たな希望として現れた。妹は姉にそのフィルムを託した直後、殺される。姉はフィルムが自由への鍵となると信じ、謎に包まれた制作者「高い城の男」を捜すことに没頭する。</md:Summary400>
		</md:LocalizedInfo> -->

		<!-- end of Localized Info -->
		
		
		<!-- <md:ReleaseYear>2015</md:ReleaseYear> -->
		
		<!-- <md:ReleaseDate>2015-01-15</md:ReleaseDate> -->
		
		<!-- Provide as much release history as possible.  -->
		<md:ReleaseHistory>
			<md:ReleaseType>{{$data['BasicMetadata-type']['ReleaseHistory']['ReleaseType']}}</md:ReleaseType>
			<md:DistrTerritory>
				<md:country>{{$data['BasicMetadata-type']['ReleaseHistory']['DistrTerritory']['country']}}</md:country>
			</md:DistrTerritory>
			<md:Date>{{$data['BasicMetadata-type']['ReleaseHistory']['Date']}}</md:Date>
		</md:ReleaseHistory>
		
		<!-- WorkType is Required -->
		<md:WorkType>{{$data['BasicMetadata-type']['WorkType']}}</md:WorkType>

		<!-- The ID used in the MMC and in the Avail must also be included in the AltIdentifier section -->
		<md:AltIdentifier>
			<md:Namespace>{{$data['BasicMetadata-type']['AltIdentifier']['Namespace']}}</md:Namespace>
			<md:Identifier>{{$data['BasicMetadata-type']['AltIdentifier']['Identifier']}}</md:Identifier>
		</md:AltIdentifier>
		<!-- <md:AltIdentifier>
			<md:Namespace>IMDB</md:Namespace>
			<md:Identifier>tt4518590</md:Identifier>
		</md:AltIdentifier> -->
		<md:RatingSet>
			<!-- each rating specifies exactly one country, system and value -->
			<!-- At least one rating is required. If the work is not rated, use <md:notrated>true</md:notrated>  -->
			<!-- see http://www.movielabs.com/md/ratings/current.html for ratings -->
			<md:Rating>
				<md:Region>
					<md:country>{{$data['BasicMetadata-type']['RatingSet']['Rating']['Region']['country']}}</md:country>
				</md:Region>
				<md:System>{{$data['BasicMetadata-type']['RatingSet']['Rating']['System']}}</md:System>
				<md:Value>{{$data['BasicMetadata-type']['RatingSet']['Rating']['Value']}}</md:Value>
			</md:Rating>

			<!-- <md:Rating>
				<md:Region>
					<md:country>DE</md:country>
				</md:Region>
				<md:System>FSK</md:System>
				<md:Value>12</md:Value>
			</md:Rating> -->
		</md:RatingSet>
			
		<!-- people are used for the cast and crew.  -->
		<md:People>
			<md:Job>
				<md:JobFunction>{$data['BasicMetadata-type']['People']['Job']['JobFunction']}</md:JobFunction>
				<md:BillingBlockOrder>{$data['BasicMetadata-type']['People']['Job']['BillingBlockOrder']}</md:BillingBlockOrder>
			</md:Job>
			<md:Name>
				<md:DisplayName language="en-US">{$data['BasicMetadata-type']['People']['Name']['DisplayName']['@language']}</md:DisplayName>
				<!-- <md:DisplayName language="ja-JP">アレクサ･ダヴァロス</md:DisplayName> -->
			</md:Name>
		</md:People>

		<!-- <md:People>
			<md:Job>
				<md:JobFunction>Actor</md:JobFunction>
				<md:BillingBlockOrder>2</md:BillingBlockOrder>
			</md:Job>
			<md:Name>
				<md:DisplayName language="en-US">Rupert Evans</md:DisplayName>
				<md:DisplayName language="ja-JP">ルパート･エヴァンス</md:DisplayName>
			</md:Name>
		</md:People>
		<md:People>
			<md:Job>
				<md:JobFunction>Actor</md:JobFunction>
				<md:BillingBlockOrder>3</md:BillingBlockOrder>
			</md:Job>
			<md:Name>
				<md:DisplayName language="en-US">Luke Kleintank</md:DisplayName>
				<md:DisplayName language="ja-JP">ルーク･クラインタンク</md:DisplayName>
			</md:Name>
		</md:People>
		<md:People>
			<md:Job>
				<md:JobFunction>Actor</md:JobFunction>
				<md:BillingBlockOrder>4</md:BillingBlockOrder>
			</md:Job>
			<md:Name>
				<md:DisplayName language="en-US">DJ Qualls</md:DisplayName>
				<md:DisplayName language="ja-JP">ＤＪクオールズ</md:DisplayName>
			</md:Name>
		</md:People>
		<md:People>
			<md:Job>
				<md:JobFunction>Producer</md:JobFunction>
				<md:BillingBlockOrder>1</md:BillingBlockOrder>
			</md:Job>
			<md:Name>
				<md:DisplayName language="en-US">Michael Cedar</md:DisplayName>
				<md:DisplayName language="ja-JP">マイケル･シダー</md:DisplayName>
			</md:Name>
		</md:People>
		<md:People>
			<md:Job>
				<md:JobFunction>Writer</md:JobFunction>
				<md:BillingBlockOrder>1</md:BillingBlockOrder>
			</md:Job>
			<md:Name>
				<md:DisplayName language="en-US">Ridley Scott</md:DisplayName>
				<md:DisplayName language="ja-JP">フランク･スポトニッツ</md:DisplayName>
			</md:Name>
		</md:People> -->
		
		<!-- OriginalLanguage is required by Amazon -->
		<md:OriginalLanguage>{{$data['BasicMetadata-type']['OriginalLanguage']}}</md:OriginalLanguage>
		
		<!-- AssociatedOrg is used to provide the Partner Alias and is required -->
		<!-- Include the Partner Alias value in the @organizationID attribute and the value of "licensor" in the @role attribute -->
		<md:AssociatedOrg 
			organizationID="{{$data['BasicMetadata-type']['AssociatedOrg']['@organizationID']}}"
			role="{{$data['BasicMetadata-type']['AssociatedOrg']['@role']}}"></md:AssociatedOrg>
		
		<!-- Sequence Info and Parent information is required for TV episodes and seasons -->
		<md:SequenceInfo>
			<md:Number>{{$data['BasicMetadata-type']['SequenceInfo']['Number']}}</md:Number>
		</md:SequenceInfo>
		<md:Parent relationshipType="{{$data['BasicMetadata-type']['Parent']['@relationshipType']}}">
			<md:ParentContentID>{{$data['BasicMetadata-type']['Parent']['ParentContentID']}}</md:ParentContentID>
		</md:Parent>
		
	</mdmec:Basic>
	
	<!-- CompanyDisplayCredit is used to provide customer-facing studio credits. Required. -->
	<mdmec:CompanyDisplayCredit>
		<md:DisplayString 
			language="{{$data['CompanyDisplayCredit']['DisplayString']['@language']}}">{{$data['CompanyDisplayCredit']['DisplayString']['value']}}</md:DisplayString>
	</mdmec:CompanyDisplayCredit>
</mdmec:CoreMetadata>