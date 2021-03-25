<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    @csrf
        <input type="number" name="price" placeholder="Price">
        <input type="text" name="" placeholder="Product Description">
        <input type="number" name="discountPercent" placeholder="Discount Percent">
        <input type="submit" value="Calculate Discount">
    </form>
</body>
</html>