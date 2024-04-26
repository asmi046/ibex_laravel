        <h2>{{ $title ?? "Форма обратной связи"}}</h2>
        <form method="POST" action="{{ route('send_consultation') }}" action="">
            @csrf
            <div class="field">
                <label class="label">Имя<span class="required">*</span></label>
                <div class="control">
                    <input name="name" class="input" type="text" placeholder="">
                </div>

                @error('name')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label">Телефон<span class="required">*</span></label>
                <div class="control">
                    <input name="phone" class="input" type="tel" placeholder="">
                </div>

                @error('phone')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label">Комментарий к запросу</label>
                <div class="control">
                    <textarea rows="5" name="message" class="input"></textarea>
                </div>

                @error('name')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div class="field check-box">
                <label class="check_wrapper">
                    <input name="policy_check" type="checkbox" checked > <span>Заполняя данную форму я соглашаюсь с <a href="/politika-konfidencialnosti">политикой конфиденциальности</a></span>
                </label>

                @error('policy_check')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="button">Отправить</button>
        </form>
