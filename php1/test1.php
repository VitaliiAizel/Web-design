<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="test2.php" method="post">
    <label>Введіть завдання:</label><br>
    <input id = "note" name = "note" type="text"><br><br>

    <label for="month">Виберіть день:</label><br>
    <input type="text" name="day" list="day">
    <datalist id="day">
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='7'>7</option>
        <option value='8'>8</option>
        <option value='9'>9</option>
        <option value='10'>10</option>
        <option value='11'>11</option>
        <option value='12'>12</option>
        <option value='13'>13</option>
        <option value='14'>14</option>
        <option value='15'>15</option>
        <option value='16'>16</option>
        <option value='17'>17</option>
        <option value='18'>18</option>
        <option value='19'>19</option>
        <option value='20'>20</option>
        <option value='21'>21</option>
        <option value='22'>22</option>
        <option value='23'>23</option>
        <option value='24'>24</option>
        <option value='25'>25</option>
        <option value='26'>26</option>
        <option value='27'>27</option>
        <option value='28'>28</option>
        <option value='29'>29</option>
        <option value='30'>30</option>
        <option value='31'>31</option>
    </datalist><br><br>

    <label for="month">Виберіть місяць:</label><br>
    <input type="text" name="month" list="month">
    <datalist id="month">
        <option value='1'>Січень</option>
        <option value='2'>Лютий</option>
        <option value='3'>Березень</option>
        <option value='4'>Квітень</option>
        <option value='5'>Травень</option>
        <option value='6'>Червень</option>
        <option value='7'>Липень</option>
        <option value='8'>Серпень</option>
        <option value='9'>Вересень</option>
        <option value='10'>Жовтень</option>
        <option value='11'>Листопад</option>
        <option value='12'>Грудень</option>
    </datalist><br><br>

    <label for="year">Виберіть рік:</label><br>
        <input type="text" name="year" list="year">
        <datalist id="year">
        <option value='2021'>
        <option value='2022'>
        <option value='2023'>
        <option value='2024'>
        <option value='2025'>
        <option value='2026'>
        <option value='2027'>
        <option value='2028'>
        <option value='2029'>
        <option value='2030'>
        <option value='2031'>
    </datalist><br><br>

    <input type="submit">
</form>
</body>
</html>

