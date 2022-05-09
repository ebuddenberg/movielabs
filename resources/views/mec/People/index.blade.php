<!-- people are used for the cast and crew.  -->
@isset($data['BasicMetadata-type']['People'])
@foreach($data['BasicMetadata-type']['People'] as $People)
    <md:People>
        <md:Job>
            <md:JobFunction>{{$People['Job']['JobFunction']}}</md:JobFunction>
            <md:BillingBlockOrder>{{$People['Job']['BillingBlockOrder']}}</md:BillingBlockOrder>
            @isset($People['Job']['Character'])
                <md:Character>{{$People['Job']['Character']}}</md:Character>
            @endisset
        </md:Job>
        <md:Name>
            <md:DisplayName language="en-US">{{$People['Name']['@language']}}</md:DisplayName>
            <md:DisplayName language="ja-JP">{{$People['Name']['DisplayName']}}</md:DisplayName>
        </md:Name>
    </md:People>
@endforeach
@endisset