<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comp[]atible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=.0">
    <title>Федоров К.Г.</title>
</head>
<body>
    <form action="send.php" method="post">
        <p>Имя пользователя: <input type="text" size="30" name="name" required></p>
        <p>Пароль: <input type="password" name="pass" required></p>        
        <p>Дата рождения:
            <select name="day" size="1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
            </select>
            <input type="text" maxlength="4" size="4" name="year">
            <select name="month" size="1">
                <option>январь</option>
                <option>февраль</option>
                <option>март</option>
                <option>апрель</option>
                <option>май</option>
                <option>июнь</option>
                <option>июль</option>
                <option>август</option>
                <option>сентябрь</option>
                <option>октябрь</option>
                <option>ноябрь</option>
                <option>декабрь</option>
            </select>
        </p>
        <p>Пол: 
            <select name="pol" size="1">
                <option value="Mуж">Муж</option>
                <option value="Жен">Жен</option>
            </select>
        </p>
        <p>Желаю регулярно получать спам на свой почтовый ящик<br>
            <input type="radio" name="choose" value="Да">Да<br>
            <input type="radio" name="choose" value="Нет">Нет
        </p>
        <p>Сколько писем в день Вы обычно получаете?<br>
            <input type="radio" name="num" value="Одно-Два" checked>Одно-два<br>
            <input type="radio" name="num" value="До 10">До 10<br>
            <input type="radio" name="num" value="Очень много">Очень много
        </p>
        <p>Укажите, каким компьютерным направлением Вы увлечены?<br>
            <input type="checkbox" name="comp[]" value="Графика" checked>Компьютерная графика (дизайн)<br>
            <input type="checkbox" name="comp[]" value="Проектирование">Проектирование<br>
            <input type="checkbox" name="comp[]" value="Программирование" checked>Программирование<br>
            <input type="checkbox" name="comp[]" value="Набор текста">Набор текста<br>
            <input type="checkbox" name="comp[]" value="Игры">Игры<br>
            <input type="checkbox" name="comp[]" value="Общение в сети">Общение в сети<br>
        </p>
        <p>Ваши пожелания к работе почтовой системы<br>
            <textarea rows="7" cols="30" name="textarea"></textarea>
        </p>
        <p>Аватарка<input type="file" ></input></p>
        (Размер 100 x 100)
        <p><input type="submit" value="Отправить данные">
        <input type="reset" value="Очистить форму"></p>
    </form>
</body>
</html>