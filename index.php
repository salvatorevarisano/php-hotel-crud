<!DOCTYPE html>
<html lang="en">
<!-- import head -->
<?php require_once __DIR__ . '/partials/template/head.php' ?>

<body>
    <!-- import array $rooms -->
    <?php require __DIR__ . '/partials/script/get-rooms.php'?>

    <header>
        <div class="container">
            <h1 class="mt-2">Rooms</h1>
        </div>
    </header>

    <!-- main content -->
    <main>

        <div class="container">
            <?php if(! empty($rooms)) { ?>
                <table class="table table-striped">
                    <thead>
                        <th>Room ID</th>
                        <th>Room Number</th>
                        <th>Details</th>
                    </thead>
                    <tbody>
                        <?php foreach ($rooms as $room) { ?>
                            <tr>
                                <td>
                                    <?php echo $room['id'] ?>
                                </td>
                                <td>
                                    <?php echo $room['room_number'] ?>
                                </td>
                                <td>
                                    <a class="danger" href="./room-details.php?id=<?php echo $room['id'] ?>">
                                        Room details
                                    </a>
            
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else {?>
                <h2>
                    something is not working ... there are no rooms to view
                </h2>
            <?php } ?>
        </div>
    </main>

    

</body>
</html>


