var express = require("express");
var app = express();
const mysql = require("mysql");
const bodyParser = require("body-parser");

app.use(bodyParser.json());

const connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "db_atn",
});

connection.connect();

app.listen(3000, () => {
    console.log("Servidor corriendo en el puerto 3000");
});

app.get('/', (req, res) => {
    res.send('API')
})

///// TABLA CATEGORIAS ////

//GET - Consultar
app.get("/categorias", (req, res) => {
    const query = "SELECT * FROM categorias";
    connection.query(query, (error, resultado) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        if (resultado.length > 0) {
            res.json(resultado);
        } else {
            res.status(404).json({ message: "No hay registros con ese ID" });
        }
    });
});
//GET – Consulta especifica
app.get("/categorias/:id", (req, res) => {
    const { id } = req.params;
    const query = "SELECT * FROM productos WHERE id_categoria = ?";
    connection.query(query, [id], (error, resultado) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        if (resultado.length > 0) {
            res.json(resultado[0]);
        } else {
            res.status(404).json({ message: "No hay registros con ese ID" });
        }
    });
});
//POST - Agregar
app.post('/categorias/agregar', (req, res) => {
    const producto = {
        id_categoria: req.body.id_categoria,
        nombre_cat: req.body.nombre_cat,
    }

    const query = `INSERT INTO categorias SET ?`
    connection.query(query, producto, (error) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        res.json({ message: "Se insertó correctamente" });
    });
});
//PUT - Actualizar info
app.put('/categorias/actualizar/:id', (req, res) => {
    const { id } = req.params
    const { nombre_cat } = req.body

    const query = `UPDATE categorias SET nombre_cat='${nombre_cat}' WHERE id_categoria='${id}';`
    connection.query(query, (error) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        res.json({ message: "Se actualizó correctamente" });
    });
});
//Delete - Eliminar
app.delete('/categorias/borrar/:id', (req, res) => {
    const { id } = req.params

    const query = `DELETE FROM categorias WHERE id_categoria=${id};`
    connection.query(query, (error) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        res.json({ message: "Se eliminó correctamente" });
    });
});

///// TABLA PRODUCTOS ////

//GET - Consultar
app.get("/productos", (req, res) => {
    const query = "SELECT * FROM productos";
    connection.query(query, (error, resultado) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        if (resultado.length > 0) {
            res.json(resultado);
        } else {
            res.status(404).json({ message: "No hay registros con ese ID" });
        }
    });
});
//GET – Consulta especifica
app.get("/productos/:id", (req, res) => {
    const { id } = req.params;
    const query = "SELECT * FROM productos WHERE id_producto = ?";
    connection.query(query, [id], (error, resultado) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        if (resultado.length > 0) {
            res.json(resultado[0]);
        } else {
            res.status(404).json({ message: "No hay registros con ese ID" });
        }
    });
});
//POST - Agregar
app.post('/productos/agregar', (req, res) => {
    const producto = {
        id_producto: req.body.id_producto,
        codigo_prod: req.body.codigo_prod,
        nombre_prod: req.body.nombre_prod,
        descripcion_prod: req.body.descripcion_prod,
        stock_prod: req.body.stock_prod,
        precio_prod: req.body.precio_prod,
        descuento_prod: req.body.descuento_prod,
        estado_prod: req.body.estado_prod,
        imagen_prod: req.body.imagen_prod,
        id_proveedor: req.body.id_proveedor,
        id_categoria: req.body.id_categoria
    }

    const query = `INSERT INTO productos SET ?`
    connection.query(query, producto, (error) => {
        if (error) return console.error(error.message)

        res.json({ message: "Se insertó correctamente" });
    })
})
//PUT - Actualizar info
app.put('/productos/actualizar/:id', (req, res) => {
    const { id } = req.params
    const { codigo_prod, nombre_prod, descripcion_prod, stock_prod, precio_prod, descuento_prod, estado_prod, imagen_prod, id_proveedor, id_categoria } = req.body

    const query = `UPDATE productos SET codigo_prod='${codigo_prod}', nombre_prod='${nombre_prod}', 
  descripcion_prod='${descripcion_prod}', stock_prod='${stock_prod}',precio_prod='${precio_prod}',precio_prod='${precio_prod}',
  descuento_prod='${descuento_prod}',estado_prod='${estado_prod}',imagen_prod='${imagen_prod}', id_proveedor='${id_proveedor}',
  id_categoria='${id_categoria}' WHERE id_producto='${id}';`
    connection.query(query, (error) => {
        if (error) return console.error(error.message)

        res.json({ message: "Se actualizó correctamente" });
    })
})
//Delete - Eliminar
app.delete('/productos/borrar/:id', (req, res) => {
    const { id } = req.params

    const query = `DELETE FROM productos WHERE id_producto=${id};`
    connection.query(query, (error) => {
        if (error) console.error(error.message)

        res.json({ message: "Se eliminó correctamente" });
    })
})

///// TABLA PROVEEDORES ////

//GET - Consultar
app.get("/proveedores", (req, res) => {
    const query = "SELECT * FROM proveedores";
    connection.query(query, (error, resultado) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        if (resultado.length > 0) {
            res.json(resultado);
        } else {
            res.status(404).json({ message: "No hay registros con ese ID" });
        }
    });
});
//GET – Consulta especifica
app.get("/proveedores/:id", (req, res) => {
    const { id } = req.params;
    const query = "SELECT * FROM proveedores WHERE id_proveedor = ?";
    connection.query(query, [id], (error, resultado) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        if (resultado.length > 0) {
            res.json(resultado[0]);
        } else {
            res.status(404).json({ message: "No hay registros con ese ID" });
        }
    });
});
//POST - Agregar
app.post('/proveedores/agregar', (req, res) => {
    const producto = {
        id_proveedor: req.body.id_proveedor,
        nombre_prove: req.body.nombre_prove,
        direccion_prove: req.body.direccion_prove,
        telefono_prove: req.body.telefono_prove,
        email_prove: req.body.email_prove
    }

    const query = `INSERT INTO proveedores SET ?`
    connection.query(query, producto, (error) => {
        if (error) return console.error(error.message)

        res.json({ message: "Se insertó correctamente" });
    })
})
//PUT - Actualizar info
app.put('/proveedores/actualizar/:id', (req, res) => {
    const { id } = req.params
    const { nombre_prove, direccion_prove, telefono_prove, email_prove } = req.body

    const query = `UPDATE proveedores SET nombre_prove='${nombre_prove}', 
  direccion_prove='${direccion_prove}', telefono_prove='${telefono_prove}', email_prove='${email_prove}' WHERE id_proveedor='${id}';`
    connection.query(query, (error) => {
        if (error) return console.error(error.message)

        res.json({ message: "Se actualizó correctamente" });
    })
})
//Delete - Eliminar
app.delete('/proveedores/borrar/:id', (req, res) => {
    const { id } = req.params

    const query = `DELETE FROM proveedores WHERE id_proovedor=${id};`
    connection.query(query, (error) => {
        if (error) console.error(error.message)

        res.json({ message: "Se eliminó correctamente" });
    })
})

///// TABLA ROLES ////

//GET - Consultar
app.get("/roles", (req, res) => {
    const query = "SELECT * FROM roles";
    connection.query(query, (error, resultado) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        if (resultado.length > 0) {
            res.json(resultado);
        } else {
            res.status(404).json({ message: "No hay registros con ese ID" });
        }
    });
});
//GET – Consulta especifica
app.get("/roles/:id", (req, res) => {
    const { id } = req.params;
    const query = "SELECT * FROM roles WHERE id_rol = ?";
    connection.query(query, [id], (error, resultado) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        if (resultado.length > 0) {
            res.json(resultado[0]);
        } else {
            res.status(404).json({ message: "No hay registros con ese ID" });
        }
    });
});
//POST - Agregar
app.post('/roles/agregar', (req, res) => {
    const producto = {
        id_rol: req.body.id_rol,
        descripcion: req.body.descripcion
    }

    const query = `INSERT INTO roles SET ?`
    connection.query(query, producto, (error) => {
        if (error) return console.error(error.message)

        res.json({ message: "Se insertó correctamente" });
    })
})
//PUT - Actualizar info
app.put('/roles/actualizar/:id', (req, res) => {
    const { id } = req.params
    const { descripcion } = req.body

    const query = `UPDATE roles SET descripcion='${descripcion}' WHERE id_rol='${id}';`
    connection.query(query, (error) => {
        if (error) return console.error(error.message)

        res.json({ message: "Se actualizó correctamente" });
    })
})
//Delete - Eliminar
app.delete('/roles/borrar/:id', (req, res) => {
    const { id } = req.params

    const query = `DELETE FROM roles WHERE id_rol=${id};`
    connection.query(query, (error) => {
        if (error) console.error(error.message)

        res.json({ message: "Se eliminó correctamente" });
    })
})

///// TABLA USUARIOS ////

//GET - Consultar
app.get("/usuarios", (req, res) => {
    const query = "SELECT * FROM usuarios";
    connection.query(query, (error, resultado) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        if (resultado.length > 0) {
            res.json(resultado);
        } else {
            res.status(404).json({ message: "No hay registros con ese ID" });
        }
    });
});
//GET – Consulta especifica
app.get("/usuarios/:id", (req, res) => {
    const { id } = req.params;
    const query = "SELECT * FROM productos WHERE id_usuario = ?";
    connection.query(query, [id], (error, resultado) => {
        if (error) {
            console.error(error.message);
            return res.status(500).json({ error: "Internal Server Error" });
        }

        if (resultado.length > 0) {
            res.json(resultado[0]);
        } else {
            res.status(404).json({ message: "No hay registros con ese ID" });
        }
    });
});
//POST - Agregar
app.post('/usuarios/agregar', (req, res) => {
    const producto = {
        id_usuario: req.body.id_usuario,
        p_nombre: req.body.p_nombre,
        s_nombre: req.body.s_nombre,
        p_apellido: req.body.p_apellido,
        s_apellido: req.body.s_apellido,
        email: req.body.email,
        contraseña: req.body.contraseña,
        id_rol: req.body.id_rol
    }

    const query = `INSERT INTO usuarios SET ?`
    connection.query(query, producto, (error) => {
        if (error) return console.error(error.message)

        res.json({ message: "Se insertó correctamente" });
    })
})
//PUT - Actualizar info
app.put('/usuarios/actualizar/:id', (req, res) => {
    const { id } = req.params
    const { p_nombre, s_nombre, p_apellido, s_apellido, email, contraseña, id_rol } = req.body

    const query = `UPDATE usuarios SET p_nombre='${p_nombre}',s_nombre='${s_nombre}',
    p_apellido='${ p_apellido}', s_apellido='${s_apellido}', email='${email}' , 
    contraseña='${contraseña}', id_rol='${id_rol}' WHERE id_usuario='${id}';`
    connection.query(query, (error) => {
        if (error) return console.error(error.message)

        res.json({ message: "Se actualizó correctamente" });
    })
})
//Delete - Eliminar
app.delete('/usuarios/borrar/:id', (req, res) => {
    const { id } = req.params

    const query = `DELETE FROM usuarios WHERE id_usuario=${id};`
    connection.query(query, (error) => {
        if (error) console.error(error.message)

        res.json({ message: "Se eliminó correctamente" });
    })
})