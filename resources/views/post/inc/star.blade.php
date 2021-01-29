<div class="btn-group" style="padding:6px;">
    @for($i=0;$i<5;$i++)
        <span class="fa fa-star" 
        @if(($i+1)<$marks)                       
            style="color:#0026f7"
        @elseif(($i+1)>$marks&&($i+0.5)<$marks)  
            style="color:#0026f7dd"
        @elseif(($i+0.5)>$marks&&$marks>$i)      
            style="color:#0026f7aa"
        @elseif($marks<$i)                       
            style="color:#0026f766"
        @endif></span>      
    @endfor
        <span style="top: -3px;position: relative;right: -15px;">{{$marks}}   </span>
    </div>