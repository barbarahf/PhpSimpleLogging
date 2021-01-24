<?php

class Usuario
{
    private $usuario;
    private $clave;
    private $name;
    private $dataNaix;
    private $email;
    private $asignaturasApuntadas; //Asginaturas es un array
    private $notasSet;


    public function __construct($usuario, $clave, $name, $dataNaix, $email)
    {
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->name = $name;
        $this->dataNaix = $dataNaix;
        $this->email = $email;


    }

    function getPromedio()
    {
        $countNotas = 0;
        $numAsig = count($this->asignaturasApuntadas);
        foreach ($this->asignaturasApuntadas as $asignatura) {
            $countNotas += $asignatura->getNota();
        }
        return $countNotas / $numAsig;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @return array
     */
    public function getAsignaturas()
    {
        return $this->asignaturasApuntadas;
    }

    /**
     * @param array asignaturasArray
     */
    public function setAsignaturas($asignaturasArray)
    {
        $this->asignaturasApuntadas = $asignaturasArray;

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return bool
     */
    public function getNotasSet()
    {
        return $this->notasSet;
    }

    /**
     * @param bool $notasSet
     */
    public function setNotasSet(bool $notasSet)
    {
        $this->notasSet = $notasSet;
    }
}

class Assignatura
{
    private $uf;
    private $modulo;
    private $nota;

    public function __construct($uf, $modulo)
    {
        $this->uf = $uf;
        $this->modulo = $modulo;
//        $this->nota = $nota;

        //Dan error
//        if (containsNumbers($name)) {
//            throw new Exception('El nombre no puede tener números');
//        }
//        if (empty($usuario) || empty($clave) || empty($name) || empty($dataNaix) || empty($email)) {
//            throw new Exception('No pueden existir compos vacios');
//        }


    }

    /**
     * @param mixed $nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @return mixed
     */
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * @return mixed
     */
    public function getNota()
    {
        return $this->nota;
    }
}
