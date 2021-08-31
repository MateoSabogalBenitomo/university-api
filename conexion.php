<html>
<body>
<?php


try {
    $db = new PDO("informix:host=informixva; service=9088;
    database=stores; server=demo_on; protocol=onsoctcp;
    EnableScrollableCursors=1;", "informix", "informix");
    print "Hello World!</br></br>";
    print "Connection Established!</br></br>";
    $stmt = $db->query("select * from customer");
    $res = $stmt->fetch( PDO::FETCH_BOTH );
    $rows = $res[0];
    echo "Table contents: $rows.</br>";
    } catch (PDOException $e) {
        print $e->getMessage();
    }

?>
</body>
</html>
