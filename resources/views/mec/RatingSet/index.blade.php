<md:RatingSet>
    <!-- each rating specifies exactly one country, system and value -->
    <!-- At least one rating is required. If the work is not rated, use <md:notrated>true</md:notrated>  -->
    <!-- see http://www.movielabs.com/md/ratings/current.html for ratings -->
    <md:Rating>
        @foreach($data['BasicMetadata-type']['RatingSet'] as $RatingSet)
            @isset($RatingSet)
            <md:Region>
                <md:country>{{$RatingSet['Rating']['Region']['country']}}</md:country>
            </md:Region>
            <md:System>{{$RatingSet['Rating']['System']}}</md:System>
            <md:Value>{{$RatingSet['Rating']['Value']}}</md:Value>
            @endisset
        @endforeach
    </md:Rating>

    <!-- <md:Rating>
        <md:Region>
            <md:country>DE</md:country>
        </md:Region>
        <md:System>FSK</md:System>
        <md:Value>12</md:Value>
    </md:Rating> -->
</md:RatingSet>