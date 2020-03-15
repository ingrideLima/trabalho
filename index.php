<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
    <body>

        <form action="dados.php" method = "POST">
        
            <table border="1">
            <tr> <td>
            <label for="protocolo"><b>Protocolo n°</b></label>
            <input type="text" name = "protocolo" id = "protocolo"> </td></tr>

            <tr> <td>
            <label for="requerente"><b>Requerente</b></label>
            <input type="text" name = "requerente" id = "requerente">

            <label for="n da matricula"><b>N° da Matricula</b></label>
            <input type="text" name = "n da matricula" id = "n da matricula"> </td> </tr>

            </table>

            <table border="1">
            <tr> <td> Preencher </td>

            <td>
            <label for="data de nascimento"><b>Data de nascimento</b></label>
            <input type="date" name = "data de nascimento" id = "data de nascimento">

            <label for="naturalidade"><b>Naturalidade</b></label>
            <input type="text" name = "naturalidade" id = "naturalidade"> <br>
            
            <label for="filiacao"><b>Filiação</b></label>
            <input type="text" name = "filiacao" id = "filiacao"> </td> </tr>

            </table>

            <table border="1">

            <tr> <td>
            <label for="curso"><b>Curso</b></label>
            <input type="text" name = "curso" id = "curso">

            <label for="periodo"><b>Período</b></label>
            <input type="number" name = "periodo" id = "periodo">

            <label for="turno"><b>Turno</b></label>
            <input type="text" name = "Turno" id = "Turno">
            </td> </tr>
            
            <tr> <td>
            <label for="telefone"><b>Telefone</b></label>
            <input type="tel" name = "telefone" id = "telefone"> | <input type="tel" name = "telefone2" id = "telefone2">

            <label for="email"><b>E-mail/<b></label>
            <input type="email" name = "email" id = "email">
            </td> </tr>
            </table>
            <br>

            <label for="assinale"><b>ASSINALE :</b></label>
             

            <table border="1">
            <tr>
                <td><b>01</b></td> <td>2° Via (especificar)</td> <td> CAA </td>
                <td><b>12</b></td> <td> Trancamento de Disciplina (especificar) </td> <td> Coordenação dos Cursos </td>
            </tr> 

            <tr>
                <td><b>02</b></td> <td>Aproveitamento de Disciplina anexar Histórico Escolar e Programa da Disciplina)</td> <td> Coordenação do Curso</td>
                <td><b>13</b></td> <td> Trancamento de Matrícula (anexar documentação comprobatória) </td> <td> Coordenação Pedagógica </td>
            </tr>

            <tr>
            <td><b>03</b></td> <td>Matrícula fora do prazo (justificar)</td> <td>CCA</td>
                <td><b>14</b></td> <td> Transferência para outra instituição </td> <td> CCA </td>
            </tr>

            <tr>
            <td><b>04</b></td> <td>Cancelamento da Matrícula</td> <td>CAA</td>
                <td><b>15</b></td> <td> Validação de Conhecimento(especificar) </td> <td> Coordenação do Cursos </td>
            </tr>

            <tr>
            <td><b>05</b></td> <td>Colação de Grau / Colação Especial(justificar)</td> <td>CCA</td>
                <td><b>16</b></td> <td> Reajuste </td> <td> CCA </td>
            </tr>

            <tr>
            <td><b>06</b></td> <td>Declaração (especificar)</td> <td>CCA</td>
                <td><b>17</b></td> <td> Recorreção de Prova </td> <td> Coordenação do Curso </td>
            </tr>

            <tr>
            <td><b>07</b></td> <td>Diploma (especificar)</td> <td>CCA</td>
                <td><b>18</b></td> <td> AUXÍLIO - Transporte</td> <td> Serviço Social </td>
            </tr>

            <tr>
            <td><b>08</b></td> <td>Histórico Escolar</td> <td>CCA</td>
                <td><b>19</b></td> <td> AUXÍLIO - Moradia</td> <td> Serviço Social </td>
            </tr>

            <tr>
            <td><b>09</b></td> <td>Reabertura de Matrícula</td> <td>CCA</td>
                <td><b>20</b></td> <td>AUXÍLIO - Óculos</td> <td> Serviço Social </td>
            </tr>

            <tr>
            <td><b>10</b></td> <td>Segunda Chamada (anexar justificativa e especificar)</td> <td>Coordenação do Curso</td>
                <td><b>21</b></td> <td> AUXÍLIO - Pais e Mães</td> <td> Serviço Social </td>
            </tr>

            <tr>
            <td><b>11</b></td> <td>Reingresso</td> <td>CCA</td>
                <td><b>22</b></td> <td> Outros (especificar)</td> <td>  </td>
            </tr>

            </table>
            <br />

            <label for="espefificar"> <b>Especificar</b> </label> 
            <input type="text" name = "especificar" id = "especificar"> <br> <br>

            <label for="justificar"> <b>Justificar</b> </label> 
            <input type="text" name = "justificar" id = "justificar"> <br> <br>

            <b> DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO Á TRANSMIÇÃO DO PROCESSO </b> <br><br>

            <label for="requerente(ASS.LEGIVEL)"> <b>REQUERENTE(ASS.LEGÍVEL)</b> </label> 
            <input type="text" name = "requerente(ASS.LEGIVEL)" id = "requerente(ASS.LEGIVEL)"> <br>

            <label for="FUNCIONARIO(ASS.LEGIVEL)"> <b>FUNCIONÁRIO(ASS.LEGÍVEL)</b> </label> 
            <input type="text" name = "FUNCIONARIO(ASS.LEGIVEL)" id = "FUNCIONARIO(ASS.LEGIVEL)"> <br> <br>

            <table border="1">
            <tr>
                </td> <td><b> VISTO(COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</b></td> 
                </td> <td><b>VISTO (BIBLIOTECA)</b></td> 
            </tr> <br>

            

            
            
        </form>
    
    </body>
</html>