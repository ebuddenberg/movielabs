<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<mdmec:CoreMetadata xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
 xsi:schemaLocation="http://www.movielabs.com/schema/mdmec/v2.6 ../mdmec-v2.6.xsd"1
 xmlns:md="http://www.movielabs.com/schema/md/v2.6/md"
 xmlns:mdmec="http://www.movielabs.com/schema/mdmec/v2.6">
	
    <mdmec:Basic ContentID="{{$data['BasicMetadata-type']['@ContentID']}}">
        @include('mec/LocalizedInfo/index', $data)
        @include('mec/ReleaseHistory/index', $data)
            
        <!-- WorkType is Required -->
        @isset($data['BasicMetadata-type']['WorkType'])
        <md:WorkType>{{$data['BasicMetadata-type']['WorkType']}}</md:WorkType>
        @endisset

        @include('mec/AltIdentifier/index', $data)
        @include('mec/RatingSet/index', $data)
        @include('mec/People/index', $data)
            
        <!-- OriginalLanguage is required by Amazon -->
        <md:OriginalLanguage>{{$data['BasicMetadata-type']['OriginalLanguage']}}</md:OriginalLanguage>
            
        <!-- AssociatedOrg is used to provide the Partner Alias and is required -->
        <!-- Include the Partner Alias value in the @organizationID attribute and the value of "licensor" in the @role attribute -->
        <md:AssociatedOrg 
            organizationID="{{$data['BasicMetadata-type']['AssociatedOrg']['@organizationID']}}"
            role="{{$data['BasicMetadata-type']['AssociatedOrg']['@role']}}">
        </md:AssociatedOrg>
        
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
