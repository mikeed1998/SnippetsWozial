<?php
    function categories() {
        $conn = dbconnect();
        $sql = "SELECT * FROM cate WHERE parent_id=0";
        $result = $conn->query($sql);
        $categories = array();

        while($row = $result->fetch_assoc()) {
            $categories[] = array(
                'id' => $row['id'],
                'parent_id' => $row['parent_id'],
                'categoria_nombre' => $row['categoria_nombre'],
                'subcategory' => sub_categories($row['idcat']),
            );
        }

        return $categories;
    }

    function sub_categories($idcat) {
        $conn = dbconnect();
        $sql = "SELECT * FROM cate WHERE parent_id=$id";
        $result = $conn->query($sql);
        $categories = array();

        while($row = $result->fetch_assoc()){
            $categories[] = array(
                'id' => $row['id'],
                'parent_id' => $row['parent_id'],
                'categoria_nombre' => $row['categoria_nombre'],
                'subcategory' => sub_categories($row['idcat']),
                'imagen' => $row['imagen'],
                'logo' => $row['logo'],
                'titulo' => $row['titulo'],
                'descripcion' => $row['descripcion']
            );
        }
        
        return $categories;
    }

    function viewsubcat($categories) {
        $html = '<ul class="sub-category">';
        foreach($categories as $category){
            $html .= '<li>'.$category['categoria_nombre'].'</li>';

            if( ! empty($category['subcategory'])){
                $html .= viewsubcat($category['subcategory']);
            }
        }

        $html .= '</ul>';
        return $html;
    }
?>