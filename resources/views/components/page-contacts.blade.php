<div class="contact_in_page collumn_box c2">
    <div class="coll">
        <a class="phone_lnk" href="tel:+7{{ phone_format($contact_info['phone']) }}">{{ $contact_info['phone'] }}</a>
        <p><a href="mailto:{{ phone_format($contact_info['email']) }}">{{ $contact_info['email'] }}</a></p>
        {{-- <p><a href="#">Скачать реквизиты предприятия</a></p> --}}
    </div>

    <div class="coll">
        <p><span class="inline_icon icon_map-pin">{{ $contact_info['adress'] }}</span></p>
    </div>
</div>
