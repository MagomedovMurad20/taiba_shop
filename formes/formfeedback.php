<div class="ufive-feedback">
        <section id="feedback">
            <h1>Форма заказа</h1>
            <form>

                <div class="field name-box">
                    <input type="text" id="name" placeholder="Татьяна" maxlength="35" pattern="[A-Za-zА-Яа-яЁё]" />
                    <label for="name">Имя</label>
                </div>

                <div class="field phone-box">
                    <input type="text" id="phone" placeholder="+79887778899" pattern="\+\d\d{3}\d{3}\d{4}" name="phone"
                        required />
                    <label for="phone">Телефон</label>
                </div>

                <div class="field msg-box">
                    <textarea id="msg" rows="4" maxlength="350"
                        placeholder="Скопируйте ссылку на товар, напишите ваши дополнительные пожелания"
                        required /></textarea>
                    <label for="msg">Текст</label>
                </div>

                <input class="button" type="submit" value="Отправить" />

            </form>
        </section>
    </div>
