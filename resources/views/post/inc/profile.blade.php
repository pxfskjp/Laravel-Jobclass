<script>console.log('post.inc.profile')</script>
@include('home.inc.spacer')
<div class="container">
    <form  action="finish_post" method="post">
        <div class="col-xl-12 content-box layout-section">
            <div class="row row-featured row-featured-category">
                <div class="col-xl-12 box-title no-border">
                    <div class="inner">
                        <h2>
                            <span class="title-3" style="font-weight: bold;">{{ t('Please invite best talented freelancer')}}</span></span>
                            <input type="submit" class="sell-your-item btn_invite" style="font-weight: bold;border:0px;" value="skip">                        
                        </h2>
                    </div>
                </div>	
            @if (isset($profile) and count($profile) > 0)
                @php $index_prof =0; @endphp  
                @foreach($profile as $key => $prof)
                @php $index_prof++; @endphp  
                @if($index_prof>$setting['max_profile_item'])
                    @php break;@endphp
                @endif
                <div class="col-xs-12 col-sm-12 col-md-12 card" style="padding:10px;">
                    <div class="well well-sm">
                        <div class="row">
                            <div style="width:30%; max-width:100px;">
                                <div class="add-image">
                                    <a href="">
                                        <img class="img-thumbnail no-margin" alt="Enjoy" src="@if($prof['photo']==null){{ URL::to('images/user.jpg')}} @else {{ $prof['photo'] }} @endif">
                                    </a>
                                </div>
                            </div>
                            <div style="width: 70%;">
                                <div class="row">
                                    <h4  style="padding:20px 0px 0px 30px;width:100%;">{{$prof['username']}}</h4>
                                    <p style="padding:0px 30px 0px 30px;margin:0px;">
                                        <img class="flag-icon no-caret" style="height:25px;" src="{{ URL::to('images/flags/32/'.$prof['country_code'].'.png') }}">
                                    </p>
                                    @php $marks =number_format(10-$prof['antimark'],2);@endphp
                                    @include('post.inc.star')
                                </div>
                                <div class="row" style="padding-left: 30px;padding-right:30px;    background: linear-gradient(45deg, black, transparent);">
                                    @foreach($prof['marks'] as $skill)
                                    <div class="badge" style="margin:3px 5px 3px 0px;background:lightgrey;font-weight:500;">
                                        <span style="color:grey;">{{ $skill['name']}}</span>:
                                        <span   @if($skill['value']>4)                              
                                                    style="color:#00bcd4;"
                                                @elseif($skill['value']>3&&$skill['value']<=4))     style="color:#3f51b5;"
                                                @elseif($skill['value']>2&&$skill['value']<=3))     style="color:#9c27b0;"
                                                @else                                               style="color:#f44336;"
                                                @endif
                                            >{{ $skill['value'] }}
                                    </span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;bottom: 50%;right:30px;height: 0px;float:right;">
                            <input type="checkbox" onclick="$(this).parent().children().eq(1).val(update_chkbox_state_fnsh({{ $prof['id'] }}))">
                            <input type="hidden" value="0" name="{{ $prof['id'] }}">
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
            </div>
        </div>
    </form>
</div>
<style>

</style>