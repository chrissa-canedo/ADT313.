<!DOCTYPE html>
<html>
<head>
    <title>Hands-on Activity</title>
</head>
<body>
    <h1>Hands-on Activity</h1>
   
    <?php
        $table = array (
            "Header" => array (
                "Firstname",
                "Middlename",
                "Lastname",
                "Section",
                "Course",
                "Year",
                "Yearlevel"
            ),
            "Body" => array (
                array(
                    "id" => "2022-00094",
                    "Firstname" => "Chrissa May",
                    "Middlename" => "Pulido",
                    "Lastname" => "Canedo",
                    "Section" => "B",
                    "Course" => "Information Technology",
                    "Yearlevel" => "3"
                ),
                array(
                    "id" => "2",
                    "Firstname" => "FirstName",
                    "Middlename" => "MiddleName",
                    "Lastname" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "id" => "3",
                    "Firstname" => "FirstName",
                    "Middlename" => "MiddleName",
                    "Lastname" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "id" => "4",
                    "Firstname" => "FirstName",
                    "Middlename" => "MiddleName",
                    "Lastname" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "id" => "5",
                    "Firstname" => "FirstName",
                    "Middlename" => "MiddleName",
                    "Lastname" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "id" => "6",
                    "Firstname" => "FirstName",
                    "Middlename" => "MiddleName",
                    "Lastname" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "id" => "7",
                    "Firstname" => "FirstName",
                    "Middlename" => "MiddleName",
                    "Lastname" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "id" => "8",
                    "Firstname" => "FirstName",
                    "Middlename" => "MiddleName",
                    "Lastname" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "id" => "9",
                    "Firstname" => "FirstName",
                    "Middlename" => "MiddleName",
                    "Lastname" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "id" => "10",
                    "Firstname" => "FirstName",
                    "Middlename" => "MiddleName",
                    "Lastname" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                )
            )
        );
    ?>

    <table border="1">
        <thead>
            <tr>
                <?php foreach ($table["Header"] as $header): ?>
                    <th><?php echo $header; ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($table["Body"] as $row): ?>
                <tr>
                    <?php foreach ($row as $cell): ?>
                        <td><?php echo $cell; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
