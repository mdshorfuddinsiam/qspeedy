<nav class="social">
    <ul>
        @if(isset($sociallink->link_one))
        <li class="linkedin"><a href="{{ $sociallink->link_one }}" target="_blank">LinkedIn <i style="font-size: 24px" class="fa-brands fa-linkedin"></i></a></li>
        @endif
        @if(isset($sociallink->link_two))
        <li class="facebook"><a href="{{ $sociallink->link_two }}" target="_blank">Facebook <i style="font-size: 24px" class="fa-brands fa-square-facebook"></i></a></li>
        @endif
        @if(isset($sociallink->link_three))
        <li class="youtube"><a href="{{ $sociallink->link_three }}" target="_blank">Youtube <i style="font-size: 24px" class="fa-brands fa-youtube"></i></a></li>
        @endif
        @if(isset($sociallink->link_four))
        <li class="instagram"><a href="{{ $sociallink->link_four }}" target="_blank">Instagram <i style="font-size: 24px" class="fa-brands fa-square-instagram"></i></a></li>
        @endif
        @if(isset($sociallink->link_five))
        <li class="instagram"><a href="{{ $sociallink->link_five }}" target="_blank">Google <i style="font-size: 24px" class="fa-brands fa-google"></i></a></li>
        @endif
        @if(isset($sociallink->link_six))
        <li class="instagram"><a href="{{ $sociallink->link_six }}" target="_blank">WhatsApp <i style="font-size: 24px" class="fa-brands fa-square-whatsapp"></i></a></li>
        @endif
    </ul>
</nav>