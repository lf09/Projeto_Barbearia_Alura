<?php
require_once("head-contato.html");
?>

<main class="maincontato">
            <form>
                <label form="nomeesobrenome">Nome e sobrenome</labe>
                <input type="text" id="nomesobrenome" class="input-padrao" required>

                <label form="email">Email</label>
                <input type="email" id="email" class="input-padrao" required placeholder="seuemail@dominio.com">

                <label form="telefone">Telefone</label>
                <input type="tel" id="telefone" class="input-padrao" required placeholder="(xx) 9xxxx-xxxx">

                <label for="mensagem">Mensagem</label>
                <textarea cols="80" rows="10" id="mensagem"></textarea class="input-padrao" required>

                <fieldset>
                
                    <legend>Como prefere o nosso contato?</legend>
                    <label for="radio-email">
                        <input type="radio" name ="contato" value="email" id="radio-email">e-mail</label>
                    

                    <label form="radio-telefone">
                        <input type="radio" name="contato" value="telefone" id="radio-telefone">Telefone</label>
                    

                    <label form="radio-whatsapp">
                        <input type="radio" name="contato" value="whatsapp" id="radio-whatsapp" checked>WhatsApp</label>
                    

                </fieldset>

                <fieldset>
                    <legend>Qual horário prefere ser atendido?</legend>
                    <select>
                        <option>Manhã</option>
                        <option>Tarde</option>
                        <option>Noite</option>
                    </select>
                </fieldset>
                
                <label class="checkbox"><input type="checkbox" checked>Gostaria de receber nossas novidades por e-mail?</label>
                
                <input type="submit" value="Enviar Formulário" class="enviar">
            </form>

            <table>
                <thead>
                    <tr>
                        <th>Dia</th>
                        <th>Horário</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Segunda</td>
                        <td>8h ~ 20h</td>
                    </tr>
                    <tr>
                        <td>Quarta</td>
                        <td>8h ~ 20h</td>
                    </tr>
                    <tr>
                        <td>Sexta</td>
                        <td>8h ~ 20h</td>
                    </tr>
                </tbody>
            </table>

        </main>

<?php

require_once("footer.html");

?>