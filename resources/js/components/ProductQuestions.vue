<template>
    <div @click.prevent="show_window = false" v-show="show_window" class="popup_win_wrapper">
        <div @click.stop class="popup_win">
            <head>
                <span>Запрос цены продукта</span>
                <svg @click.prevent="show_window = false" title="Закрыть" class="close_win sprite_icon">
                    <use xlink:href="#close_icon"></use>
                </svg>
            </head>
            <body>
                <div class="product_label">
                    <div class="img_wrap">
                        <img :src="props.img" :alt="props.title">
                    </div>
                    <div class="text">
                        <h3>{{ props.title }}</h3>
                    </div>
                </div>

                <form method="POST" :action="props.rout">
                    <input type="hidden" name="product">
                    <div class="field">
                        <label class="label">Имя</label>
                        <div class="control">
                            <input v-model="name" name="name" class="input" type="text" placeholder="">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Телефон<span class="required">*</span></label>
                        <div class="control">
                            <input v-model="phone" @click.prevent="phoneNotSet  = false" ref="el" name="phone" class="input" :class="{ _error: phoneNotSet }" type="text" placeholder="">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Комментарий к запросу</label>
                        <div class="control">
                            <textarea v-model="message" rows="5" name="message" class="input"></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label checkbox_label" :class="{ _error: acceptNotSet }" @click="acceptNotSet  = false" >
                            <input v-model="accept" type="checkbox" name="accept" value="accept" id="">
                            <span>Я ознакомился с <a href="/politika-konfidencialnosti">политикой конфиденциальности</a> и даю <a href="/soglasie-na-obrabotku-personalnyx-dannyx">согласие на обработку персональных данных</a></span>
                        </label>
                    </div>

                    <button :disabled='startSend' @click.prevent="send_information" type="submit" class="button">Отправить</button>
                </form>

            </body>
        </div>
    </div>

    <div v-show="show_window" class="popup_shadow"></div>

    <button class="more_btn button" @click.prevent="show_window = !show_window">Узнать цену</button>

</template>

<script setup>

    import { ref, watch } from "vue";
    import { useIMask } from 'vue-imask';

    const _token = document.querySelector('meta[name="_token"]').content
    let name = ref('')
    let phone = ref('')
    let message = ref('')
    let accept = ref(['accept'])
    let phoneNotSet = ref(false)
    let acceptNotSet = ref(false)
    let startSend = ref(false)


    let show_window = ref(false)

    const props = defineProps({
        title: String,
        img: String,
        rout: String,
    })

    const { el, masked } = useIMask({
        mask: '+{7} (000) 000-00-00',
      }
    );

    const send_information = () => {
        if (phone.value == "") {
            phoneNotSet.value = true
            return;
        }

        if (accept.value.length == 0) {
            acceptNotSet.value = true
            return;
        }
        startSend.value = true;

        axios.post(props.rout, {
                _token: _token,
                product: props.title,
                name: name.value,
                phone: phone.value,
                message: message.value,
            })
            .then((response) => {
                startSend.value = false;
                document.location.href="/thencs/thencs_consult"
            })
            .catch(error => {
                startSend.value = false;
                alert("Возникла ошибка:\n\r"+error.message+"\n\r Попробуйте позднее!")
                console.log(error)
            });
    }

</script>

<style>

</style>
