<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    protected $paises = [
        [
            'id' => 1,
            'nome' => 'Brasil',
            'capital' => 'Brasília',
            'estados' => [
                [
                    'id' => 1,
                    'paisId' => 1,
                    'nome' => 'São Paulo',
                    'cidades' => [
                        ['id' => 1, 'nome' => 'São Paulo', 'populacao' => 12300000, 'area' => 1521, 'estado' => 1, 'paisId' => 1],
                        ['id' => 2, 'nome' => 'Campinas', 'populacao' => 1210000, 'area' => 795, 'estado' => 1, 'paisId' => 1],
                        ['id' => 3, 'nome' => 'Santos', 'populacao' => 430000, 'area' => 280, 'estado' => 1, 'paisId' => 1],
                    ],
                ],
                [
                    'id' => 2,
                    'paisId' => 1,
                    'nome' => 'Rio de Janeiro',
                    'cidades' => [
                        ['id' => 4, 'nome' => 'Rio de Janeiro', 'populacao' => 6748000, 'area' => 1182, 'estado' => 2, 'paisId' => 1],
                        ['id' => 5, 'nome' => 'Niterói', 'populacao' => 500000, 'area' => 52, 'estado' => 2, 'paisId' => 1],
                        ['id' => 6, 'nome' => 'Petrópolis', 'populacao' => 300000, 'area' => 795, 'estado' => 2, 'paisId' => 1],
                    ],
                ],
                [
                    'id' => 3,
                    'paisId' => 1,
                    'nome' => 'Minas Gerais',
                    'cidades' => [
                        ['id' => 7, 'nome' => 'Belo Horizonte', 'populacao' => 2500000, 'area' => 331, 'estado' => 3, 'paisId' => 1],
                        ['id' => 8, 'nome' => 'Uberlândia', 'populacao' => 700000, 'area' => 411, 'estado' => 3, 'paisId' => 1],
                        ['id' => 9, 'nome' => 'Juiz de Fora', 'populacao' => 500000, 'area' => 143, 'estado' => 3, 'paisId' => 1],
                    ],
                ],
                [
                    'id' => 4,
                    'paisId' => 1,
                    'nome' => 'Bahia',
                    'cidades' => [
                        ['id' => 10, 'nome' => 'Salvador', 'populacao' => 2920000, 'area' => 706, 'estado' => 4, 'paisId' => 1],
                        ['id' => 11, 'nome' => 'Feira de Santana', 'populacao' => 620000, 'area' => 166, 'estado' => 4, 'paisId' => 1],
                        ['id' => 12, 'nome' => 'Vitória da Conquista', 'populacao' => 340000, 'area' => 1094, 'estado' => 4, 'paisId' => 1],
                    ],
                ],
                [
                    'id' => 5,
                    'paisId' => 1,
                    'nome' => 'Paraná',
                    'cidades' => [
                        ['id' => 13, 'nome' => 'Curitiba', 'populacao' => 1960000, 'area' => 432, 'estado' => 5, 'paisId' => 1],
                        ['id' => 14, 'nome' => 'Londrina', 'populacao' => 600000, 'area' => 1650, 'estado' => 5, 'paisId' => 1],
                        ['id' => 15, 'nome' => 'Maringá', 'populacao' => 400000, 'area' => 511, 'estado' => 5, 'paisId' => 1],
                    ],
                ],
            ],
        ],
        [
            'id' => 2,
            'nome' => 'Argentina',
            'capital' => 'Buenos Aires',
            'estados' => [
                [
                    'id' => 6,
                    'paisId' => 2,
                    'nome' => 'Buenos Aires',
                    'cidades' => [
                        ['id' => 16, 'nome' => 'La Plata', 'populacao' => 800000, 'area' => 95, 'estado' => 6, 'paisId' => 2],
                        ['id' => 17, 'nome' => 'Mar del Plata', 'populacao' => 600000, 'area' => 57, 'estado' => 6, 'paisId' => 2],
                        ['id' => 18, 'nome' => 'Bahía Blanca', 'populacao' => 300000, 'area' => 1020, 'estado' => 6, 'paisId' => 2],
                    ],
                ],
                [
                    'id' => 7,
                    'paisId' => 2,
                    'nome' => 'Córdoba',
                    'cidades' => [
                        ['id' => 19, 'nome' => 'Córdoba', 'populacao' => 1400000, 'area' => 576, 'estado' => 7, 'paisId' => 2],
                        ['id' => 20, 'nome' => 'Villa María', 'populacao' => 100000, 'area' => 145, 'estado' => 7, 'paisId' => 2],
                        ['id' => 21, 'nome' => 'Río Cuarto', 'populacao' => 150000, 'area' => 189, 'estado' => 7, 'paisId' => 2],
                    ],
                ],
                [
                    'id' => 8,
                    'paisId' => 2,
                    'nome' => 'Santa Fé',
                    'cidades' => [
                        ['id' => 22, 'nome' => 'Santa Fé', 'populacao' => 400000, 'area' => 211, 'estado' => 8, 'paisId' => 2],
                        ['id' => 23, 'nome' => 'Rosario', 'populacao' => 1000000, 'area' => 178, 'estado' => 8, 'paisId' => 2],
                        ['id' => 24, 'nome' => 'Venado Tuerto', 'populacao' => 85000, 'area' => 180, 'estado' => 8, 'paisId' => 2],
                    ],
                ],
                [
                    'id' => 9,
                    'paisId' => 2,
                    'nome' => 'Tucumán',
                    'cidades' => [
                        ['id' => 25, 'nome' => 'San Miguel de Tucumán', 'populacao' => 800000, 'area' => 160, 'estado' => 9, 'paisId' => 2],
                        ['id' => 26, 'nome' => 'Concepción', 'populacao' => 35000, 'area' => 400, 'estado' => 9, 'paisId' => 2],
                        ['id' => 27, 'nome' => 'Tafí Viejo', 'populacao' => 60000, 'area' => 200, 'estado' => 9, 'paisId' => 2],
                    ],
                ],
                [
                    'id' => 10,
                    'paisId' => 2,
                    'nome' => 'Mendoza',
                    'cidades' => [
                        ['id' => 28, 'nome' => 'Mendoza', 'populacao' => 1000000, 'area' => 54, 'estado' => 10, 'paisId' => 2],
                        ['id' => 29, 'nome' => 'San Rafael', 'populacao' => 120000, 'area' => 300, 'estado' => 10, 'paisId' => 2],
                        ['id' => 30, 'nome' => 'Malargüe', 'populacao' => 15000, 'area' => 65000, 'estado' => 10, 'paisId' => 2],
                    ],
                ],
            ],
        ],
        [
            'id' => 3,
            'nome' => 'Chile',
            'capital' => 'Santiago',
            'estados' => [
                [
                    'id' => 11,
                    'paisId' => 3,
                    'nome' => 'Região Metropolitana',
                    'cidades' => [
                        ['id' => 31, 'nome' => 'Santiago', 'populacao' => 7000000, 'area' => 641, 'estado' => 11, 'paisId' => 3],
                        ['id' => 32, 'nome' => 'Puente Alto', 'populacao' => 500000, 'area' => 191, 'estado' => 11, 'paisId' => 3],
                        ['id' => 33, 'nome' => 'Maipú', 'populacao' => 400000, 'area' => 131, 'estado' => 11, 'paisId' => 3],
                    ],
                ],
                [
                    'id' => 12,
                    'paisId' => 3,
                    'nome' => 'Valparaíso',
                    'cidades' => [
                        ['id' => 34, 'nome' => 'Valparaíso', 'populacao' => 300000, 'area' => 400, 'estado' => 12, 'paisId' => 3],
                        ['id' => 35, 'nome' => 'Viña del Mar', 'populacao' => 350000, 'area' => 121, 'estado' => 12, 'paisId' => 3],
                        ['id' => 36, 'nome' => 'Quilpué', 'populacao' => 200000, 'area' => 143, 'estado' => 12, 'paisId' => 3],
                    ],
                ],
                [
                    'id' => 13,
                    'paisId' => 3,
                    'nome' => 'Biobío',
                    'cidades' => [
                        ['id' => 37, 'nome' => 'Concepción', 'populacao' => 220000, 'area' => 232, 'estado' => 13, 'paisId' => 3],
                        ['id' => 38, 'nome' => 'Talcahuano', 'populacao' => 300000, 'area' => 103, 'estado' => 13, 'paisId' => 3],
                        ['id' => 39, 'nome' => 'Los Ángeles', 'populacao' => 200000, 'area' => 1244, 'estado' => 13, 'paisId' => 3],
                    ],
                ],
                [
                    'id' => 14,
                    'paisId' => 3,
                    'nome' => 'Araucanía',
                    'cidades' => [
                        ['id' => 40, 'nome' => 'Temuco', 'populacao' => 300000, 'area' => 1264, 'estado' => 14, 'paisId' => 3],
                        ['id' => 41, 'nome' => 'Villarrica', 'populacao' => 35000, 'area' => 1340, 'estado' => 14, 'paisId' => 3],
                        ['id' => 42, 'nome' => 'Pucón', 'populacao' => 20000, 'area' => 606, 'estado' => 14, 'paisId' => 3],
                    ],
                ],
                [
                    'id' => 15,
                    'paisId' => 3,
                    'nome' => 'Maule',
                    'cidades' => [
                        ['id' => 43, 'nome' => 'Talca', 'populacao' => 180000, 'area' => 245, 'estado' => 15, 'paisId' => 3],
                        ['id' => 44, 'nome' => 'Curicó', 'populacao' => 90000, 'area' => 520, 'estado' => 15, 'paisId' => 3],
                        ['id' => 45, 'nome' => 'Linares', 'populacao' => 80000, 'area' => 275, 'estado' => 15, 'paisId' => 3],
                    ],
                ],
            ],
        ],
        [
            'id' => 4,
            'nome' => 'Colômbia',
            'capital' => 'Bogotá',
            'estados' => [
                [
                    'id' => 16,
                    'paisId' => 4,
                    'nome' => 'Cundinamarca',
                    'cidades' => [
                        ['id' => 46, 'nome' => 'Bogotá', 'populacao' => 8000000, 'area' => 177, 'estado' => 16, 'paisId' => 4],
                        ['id' => 47, 'nome' => 'Soacha', 'populacao' => 500000, 'area' => 175, 'estado' => 16, 'paisId' => 4],
                        ['id' => 48, 'nome' => 'Chocontá', 'populacao' => 35000, 'area' => 241, 'estado' => 16, 'paisId' => 4],
                    ],
                ],
                [
                    'id' => 17,
                    'paisId' => 4,
                    'nome' => 'Antioquia',
                    'cidades' => [
                        ['id' => 49, 'nome' => 'Medellín', 'populacao' => 2500000, 'area' => 382, 'estado' => 17, 'paisId' => 4],
                        ['id' => 50, 'nome' => 'Envigado', 'populacao' => 200000, 'area' => 31, 'estado' => 17, 'paisId' => 4],
                        ['id' => 51, 'nome' => 'Bello', 'populacao' => 500000, 'area' => 146, 'estado' => 17, 'paisId' => 4],
                    ],
                ],
                [
                    'id' => 18,
                    'paisId' => 4,
                    'nome' => 'Valle del Cauca',
                    'cidades' => [
                        ['id' => 52, 'nome' => 'Cali', 'populacao' => 2200000, 'area' => 564, 'estado' => 18, 'paisId' => 4],
                        ['id' => 53, 'nome' => 'Palmira', 'populacao' => 300000, 'area' => 407, 'estado' => 18, 'paisId' => 4],
                        ['id' => 54, 'nome' => 'Tuluá', 'populacao' => 150000, 'area' => 1065, 'estado' => 18, 'paisId' => 4],
                    ],
                ],
                [
                    'id' => 19,
                    'paisId' => 4,
                    'nome' => 'Cesar',
                    'cidades' => [
                        ['id' => 55, 'nome' => 'Valledupar', 'populacao' => 150000, 'area' => 200, 'estado' => 19, 'paisId' => 4],
                        ['id' => 56, 'nome' => 'La Paz', 'populacao' => 20000, 'area' => 489, 'estado' => 19, 'paisId' => 4],
                        ['id' => 57, 'nome' => 'Aguachica', 'populacao' => 45000, 'area' => 467, 'estado' => 19, 'paisId' => 4],
                    ],
                ],
                [
                    'id' => 20,
                    'paisId' => 4,
                    'nome' => 'Atlántico',
                    'cidades' => [
                        ['id' => 58, 'nome' => 'Barranquilla', 'populacao' => 1200000, 'area' => 154, 'estado' => 20, 'paisId' => 4],
                        ['id' => 59, 'nome' => 'Soledad', 'populacao' => 500000, 'area' => 68, 'estado' => 20, 'paisId' => 4],
                        ['id' => 60, 'nome' => 'Malambo', 'populacao' => 200000, 'area' => 52, 'estado' => 20, 'paisId' => 4],
                    ],
                ],
            ],
        ],
    ];
    

    public function index()
    {
        return view('paises.index', ['paises' => $this->paises]);
    }

    public function show($id)
    {
        $pais = $this->getPaisById($id);
        return view('paises.show', ['pais' => $pais]);
    }

    public function estados($id)
    {
        $pais = $this->getPaisById($id);
        return view('estados.index', ['estados' => $pais['estados']]);
    }

    public function showEstado($paisId, $estadoId)
    {
        $estado = $this->getEstadoById($paisId, $estadoId);
        return view('estados.show', ['estado' => $estado]);
    }

    public function cidades($paisId, $estadoId)
    {
        $estado = $this->getEstadoById($paisId, $estadoId);
        return view('cidades.index', ['cidades' => $estado['cidades']]);
    }

    public function showCidade($paisId, $estadoId, $cidadeId)
{
    $cidade = $this->getCidadeById($paisId, $estadoId, $cidadeId);
    return view('cidades.show', ['cidade' => $cidade]);
}


    protected function getPaisById($id)
    {
        foreach ($this->paises as $pais) {
            if ($pais['id'] == $id) {
                return $pais;
            }
        }
        abort(404); // País não encontrado
    }

    protected function getEstadoById($paisId, $estadoId)
    {
        $pais = $this->getPaisById($paisId);
        foreach ($pais['estados'] as $estado) {
            if ($estado['id'] == $estadoId) {
                return $estado;
            }
        }
        abort(404); // Estado não encontrado
    }

    protected function getCidadeById($paisId, $estadoId, $cidadeId)
    {
        $estado = $this->getEstadoById($paisId, $estadoId);
        foreach ($estado['cidades'] as $cidade) {
            if ($cidade['id'] == $cidadeId) {
                return $cidade;
            }
        }
        abort(404); // Cidade não encontrada
    }
}

