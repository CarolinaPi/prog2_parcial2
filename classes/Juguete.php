<?php
class Juguete 
{
    private $id;
    private $nombre;
    private $descripcion;
    private $tipo_juego;
    private $cantidad_piezas;
    private $imagen;
    private $edad_recomendada;
    private $coleccion;
    private $precio;  


/**
 * Devuelve el catalogo completo
 */
public function catalogo_completo(): array
    {
      $catalogo = [];

        $JSON = file_get_contents('datos/productos.json');
        $JSONData = json_decode($JSON);

        foreach ($JSONData as $value) {
            $juguete = new self();

            $juguete->id = $value->id;
            $juguete->nombre = $value->nombre;
            $juguete->descripcion = $value->descripcion;
            $juguete->tipo_juego = $value->tipo_juego;
            $juguete->cantidad_piezas = $value->cantidad_piezas;
            $juguete->imagen = $value->imagen;
            $juguete->edad_recomendada = $value->edad_recomendada;
            $juguete->precio = $value->precio;

            $catalogo[] = $juguete;
        }

        return $catalogo;
    }

    /**
     * Devuelve el catalogo del producto con una clasificacion de juego en particular
     * @param string $tipoJuego Un string con el nombre del tipo de juego a buscar
     * @return Juguete[] Un array con todos los productos de esa clasificacion de juego
     */
    public function catalogo_tipo_juego(string $tipoJuego): array
    {

        $resultado = [];
        $catalogo = $this->catalogo_completo();

        foreach ($catalogo as $j) {
            if ($j->tipo_juego == $tipoJuego) {
                $resultado[] = $j;
            }
        }
        return $resultado;
    }


    /**
     * Devuelve los datos de un producto en particular
     * @param int $idProducto El ID único del producto a mostrar 
     */
    public function producto_x_id(int $idProducto): Juguete
    {
        $catalogo = $this->catalogo_completo();

        foreach ($catalogo as $j) {
            if ($j->id == $idProducto) {
                return $j;
            }
        }
        return null;
    }


    /**
     * Devuelve el precio de la unidad, formateado correctamente
     */
    public function precio_formateado(): string
    {
        return number_format($this->precio, 2, ",", ".");
    }

 /**
     * Esta función devuelve las primeras x palabras de un párrafo 
     * @param int $cantidad Esta es la cantidad de palabras a extraer (Opcional)
     */
    public function bajada_reducida(int $cantidad = 10): string
    {
        $texto = $this->descripcion;

        $array = explode(" ", $texto);
        if (count($array) <= $cantidad) {
            $resultado = $texto;
        } else {
            array_splice($array, $cantidad);
            $resultado = implode(" ", $array) . "...";
        }

        return $resultado;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get the value of tipo_juego
     */ 
    public function getTipo_juego()
    {
        return $this->tipo_juego;
    }

    /**
     * Get the value of cantidad_piezas
     */ 
    public function getCantidad_piezas()
    {
        return $this->cantidad_piezas;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Get the value of edad_recomendada
     */ 
    public function getEdad_recomendada()
    {
        return $this->edad_recomendada;
    }

    /**
     * Get the value of coleccion
     */ 
    public function getColeccion()
    {
        return $this->coleccion;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }
}