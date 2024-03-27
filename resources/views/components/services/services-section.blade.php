<section class="services_section">
    <div class="container">
        <div class="services__box">
            <div class="services_section__title-box">
                <h2 class="section-title">Услуги</h2>
            </div>
            @foreach ($service_list as $item)
                <x-services.card :item="$item"></x-services.card>
            @endforeach
            {{-- <div class="service">
                <span class="service__number">1</span>
                <span class="service__caption">Гибка металла</span>
                <span class="service__description">
                    Формируем сталь по вашему образцу. Гибкость и точность – наши ключевые черты для создания качественных металлических изделий.
                </span>
            </div>
            <div class="service">
                <span class="service__number">2</span>
                <span class="service__caption">Порошковая покраска</span>
                <span class="service__description">
                    Наносим защитное покрытие высокого качества. Яркие оттенки и стойкость к воздействию – ваше долговечное решение.
                </span>
            </div>
            <div class="service">
                <span class="service__number">3</span>
                <span class="service__caption">Холодная штамповка </span>
                <span class="service__description">
                    Преобразовываем металл в точные формы. Точность, надежность и высокая производительность – наши стандарты.
                </span>
            </div>
            <div class="service">
                <span class="service__number">4</span>
                <span class="service__caption">Обработка рулонной стали</span>
                <span class="service__description">
                    Точная обработка для максимальной прочности. Наши технологии – ваш путь к идеальным металлическим конструкциям.
                </span>
            </div>
            <div class="service">
                <span class="service__number">5</span>
                <span class="service__caption">Гальваническое цинкование</span>
                <span class="service__description">
                    Надежная защита от коррозии. Наносим тонкий слой цинка для долговечности вашего металла.
                </span>
            </div> --}}
        </div>
    </div>
</section>
