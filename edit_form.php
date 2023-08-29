<?php
// 大括號可以轉字串
// _底線為"全域變數

// 只有一筆 fetch
// id (ctrl+D )=>改成value
// 先選取下方"">alt鍵 一個個複製進"

// Warning: Undefined array key "id" in E:\php\edit_form.php on line 12

$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');
$sql="select * from `students` where `id`='{$_GET['id']}'";
$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

?>
<style>
table{
    border-collapse:collapse;
    width:70%;
    min-width:800px;
}    

td{
    border:1px solid lightblue;
    padding:5px 8px;
}
a.btn{
    border: 1px solid lightgreen;
    padding: 5px 15px;
    border-radius: 7px;
    display: inline-block;
    margin: 5px;
    box-shadow: 2px 2px 10px green;
    background-color: deepskyblue;
    color: white;
    text-decoration:none;
    position:relative;
    top:0px;
    transition:all 0.5s;
}

a.btn:hover{
    text-decoration:underline;
    background-color: skyblue;
    position:relative;
    top:-5px;
    transform:scale(1.1);
    transition:all 0.5s;
} 
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>編輯學生資料</title>

<h1>學生列表</h1>
<dorm acion="edit.php" mothod="post">
<div>
    <lable>學號</lable>
    <input type="text" name="uni_id" value="<?=$row['uni_id'];?>">
</div>
<div>
    <lable>班級座號</lable>
    <input type="text" name="seat_num" value="<?=$row['seat_num'];?>">
</div>
<div>
    <lable>姓名</lable>
    <input type="text" name="name" value="<?=$row['name'];?>">
</div>
<div>
    <lable>出生年月日</lable>
    <input type="text" name="birthday" value="<?=$row['birthday'];?>">
</div>
<div>
    <lable>身分證號碼</lable>
    <input type="text" name="national_id" value="<?=$row['national_id'];?>">
</div>
<div>
    <lable>住址</lable>
    <input type="text" name="address" value="<?=$row['address'];?>">
</div>
<div>
    <lable>家長</lable>
    <input type="text" name="parent" value="<?=$row['parent'];?>">
</div>
<div>
    <lable>電話</lable>
    <input type="text" name="telphone" value="<?=$row['telphone'];?>">
</div>
<div>
    <lable>科別</lable>
    <input type="text" name="major" value="<?=$row['major'];?>">
</div>
<div>
    <lable>畢業國中</lable>
    <input type="text" name="secondary" value="<?=$row['secondary'];?>">
</div>
<div>
        <td>編輯</td>
        <td><a href='del.php?id=<?=$row['id'];?>'>刪除</a></td>
    </tr>
 
    </div>
<div>
    <input type="submit" value="編輯"><input type="reset" value="取消">
</div>
        </form>
        </body>    

