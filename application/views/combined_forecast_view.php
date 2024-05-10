<?php
if (!isset($time_period)) {
    $time_period = 'all'; // Set a default value if not defined
}
if (!isset($sort_column)) {
    $sort_column = 'title'; // Set a default value if not defined
}
?>


<?php
if (!empty($datas)) { // Check if $prodInfo is not empty or null
    foreach ($datas as $prod) {
        // Your foreach loop code here
    }
} else {
    // Handle the case where $prodInfo is empty or null
    echo "No data available.";
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Product Listing</title>
</head>
<body>
    <h1>Product Listing</h1>

    <!-- Sorting Links -->
    <p>Sort by:
        <a href="<?= base_url("Welcome/joined/title/asc/$time_period") ?>">Crop Name (ASC)</a> |
        <a href="<?= site_url("Welcome/joined/title/desc/$time_period") ?>">Crop Name (DESC)</a> |
        <a href="<?= site_url("Welcome/joined/plant/asc/$time_period") ?>">Date Planted (ASC)</a> |
        <a href="<?= site_url("Welcome/joined/plant/desc/$time_period") ?>">Date Planted (DESC)</a> |
        <a href="<?= site_url("Welcome/joined/harvest/asc/$time_period") ?>">Date Harvested (ASC)</a> |
        <a href="<?= site_url("Welcome/joined/harvest/desc/$time_period") ?>">Date Harvested (DESC)</a>
    </p>

    <!-- Time Period Selection -->
    <p>Show data for:
        <a href="<?= site_url("Welcome/joined/$sort_column/$sort_order/all") ?>">All</a> |
        <a href="<?= site_url("Welcome/joined/$sort_column/$sort_order/monthly") ?>">Monthly</a> |
        <a href="<?= site_url("Welcome/joined/$sort_column/$sort_order/weekly") ?>">Weekly</a>
    </p>

    <table>
                <thead>
                    <tr>
                        <th>Crop/Product Name:</th>
                        <th>Date Planted</th>
                        <th>Date Harvested</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($datas['prodInfo'] !== 0) : ?>
                    <?php foreach ($datas['prodInfo'] as $prodInfo) : ?>
                        <tr>
                            <td style="background-color: <?= $prodInfo['hex']?>;"><?php echo $prodInfo['title']; ?></td>
                            <td><?= date('F j, Y', strtotime($prodInfo['plant'] )) ?></td>
                            <td><?= date('F j, Y', strtotime($prodInfo['harvest'] )) ?></td>

                            <?php if ($prodInfo['remaining_days'] === 'already harvested'): ?>
                                <td> Already Harvested</td>
                            <?php else: ?>
                                <td><?= $prodInfo['remaining_days'] ?></td>
                                <?php endif; ?>
  
                           
                        </tr>
                    <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="3">No data available.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
</body>

</html>
