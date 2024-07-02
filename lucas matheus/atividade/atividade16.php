<html>
     <body>
         <form id="formcadastro" nome= "formcadastro" methot= "POST" action="recebeform.php">

             <input type=radio nome=sistema  value="windows 8.1"> win 98 <br>
             <input type=radio nome=sistema  value="windows 10"> win xp <br>
             <input type=radio nme=sistema   value="linux"> linux <br>
             <input type=radio nome=sistema  value="mac"> mac <br>


             <B> escolha os numero de sua preferencia:</B><br>
             <input type=checkbox nome="numeros[]" value=10> 10 <br>
             <input type=checkbox nome="numeros[]" value=100> 100 <br>
             <input type=checkbox nome="numeros[]" value=1000> 1000 <br>


             <B> Qual seu processador?</B><br>
             <select nome= processador>
             <option value= pentium> Pentium</option>
             <option value=AMD>AMD<option>
             <option value=celeron>celeron</option>
             </select><BR><BR>

             <input id="botaoeviar" type="submit" value= "enviar">
         </form>
     </body>
</html>