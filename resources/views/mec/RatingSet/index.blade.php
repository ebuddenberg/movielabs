<md:RatingSet>
<!-- each rating specifies exactly one country, system and value -->
<!-- At least one rating is required. If the work is not rated, use <md:notrated>true</md:notrated>  -->
<!-- see http://www.movielabs.com/md/ratings/current.html for ratings -->
<md:Rating>
@isset($data['BasicMetadata-type']['RatingSet'])
@foreach($data['BasicMetadata-type']['RatingSet'] as $RatingSet)
<md:Region>
@isset($RatingSet['Rating']['Region']['country'])
<md:country>{{$RatingSet['Rating']['Region']['country']}}</md:country>
@endisset
</md:Region>
<md:System>{{$RatingSet['Rating']['System']}}</md:System>
<md:Value>{{$RatingSet['Rating']['Value']}}</md:Value>
@endforeach
@endisset
</md:Rating>
<!-- <md:Rating>
<md:Region>
<md:country>DE</md:country>
</md:Region>
<md:System>FSK</md:System>
<md:Value>12</md:Value>
</md:Rating> -->
</md:RatingSet>