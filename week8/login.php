<?php
    $password = '12345';

    $uname = $_POST['uname'];
    $passwd = $_POST['pwd'];

    $users = [
        'admin' => ['password' => 'admin123', 'nama' => 'Administrator'],
        'gudang' => ['password' => 'agudang123', 'nama' => 'Admin Gudang'],
        'kasir' => ['password' => 'kasir123', 'nama' => 'Kasir']
    ];

    $result = match(true)
    {
        !isset($users[$uname])                => 'User tidak ditemukan',
        $users[$uname]['password'] != $passwd => 'Password salah',
        $users[$uname]['password'] == $passwd => 'Selamat datang, ' . $users[$uname]['nama'],
        default                               => 'Error'
    };
    
    echo $result;


    ?>
    <table width="100%" cellpadding="5" cellspacing="0" border="1">
        <tr>
            <th>Username</th>
            <th>Nama Lengkap</th>
        </tr>

    <?php
    foreach($users as $key -> $user)
    {
        echo '<tr>';
        echo '<td>', $key, '</td>';
        echo '<td>', $user['nama'], '</td>';
        echo '</tr>';
    }
?>
</table>
<?php
    $user = match($uname)
    {
        'admin' => 'Administrator',
        'gudang' => 'Admin Gudang',
        'kasir' => 'Kasir',
        default => 'invalid'
    };

    if($user == 'invalid')
    {
        echo "User tidak ditemukan";
    }
    else
    {

    if($passwd == $password)
    {
        echo "Selamat Datang, ", $uname;
    }
    else
    {
        echo "pwd salah";
    }
}