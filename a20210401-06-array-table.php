<?php include __DIR__ . '/parts/config.php'; ?>

<?php

$title = '我的主頁';

$persons = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => 'David',
        'age' => 22,
        'gender' => 'male',
    ],
    [
        'name' => 'Lucy',
        'age' => 29,
        'gender' => 'female',
    ],
    [
        'name' => 'Amy',
        'age' => 20,
        'gender' => 'female',
    ]

];

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<div class="container">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persons as $p) : ?>
                <tr>
                    <td><?= $p['name'] ?></td>
                    <td><?= $p['gender'] ?></td>
                    <td><?= $p['age'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<?php include __DIR__ . '/parts/html-foot.php'; ?>