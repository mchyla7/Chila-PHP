<h2>Kontakt</h2>

<div class="kontakt-container">
    <div class="kontakt-info">
        <h3>Nahlášení chyby nebo problému</h3>
        <p>Pokud jste našli chybu na našich stránkách nebo máte problém s funkcionalitou, neváhejte nás kontaktovat pomocí formuláře níže.</p>
    </div>

    <form class="kontakt-form" method="POST" action="kontakt.php">
        <div class="form-group">
            <label for="jmeno">Jméno a příjmení:</label>
            <input type="text" id="jmeno" name="jmeno" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="typ_problemu">Typ problému:</label>
            <select id="typ_problemu" name="typ_problemu" required>
                <option value="">Vyberte typ problému</option>
                <option value="chyba_zobrazeni">Chyba zobrazení</option>
                <option value="nefunkcni_odkaz">Nefunkční odkaz</option>
                <option value="chybne_informace">Chybné informace</option>
                <option value="problem_navigace">Problém s navigací</option>
                <option value="jine">Jiné</option>
            </select>
        </div>

        <div class="form-group">
            <label for="stranka">Na které stránce se problém vyskytuje:</label>
            <select id="stranka" name="stranka">
                <option value="">Vyberte stránku</option>
                <option value="uvod">Úvod</option>
                <option value="kalendar">Kalendář závodů</option>
                <option value="tymy">Týmy a jezdci</option>
                <option value="vysledky">Výsledky</option>
                <option value="statistiky">Statistiky</option>
                <option value="kontakt">Kontakt</option>
            </select>
        </div>

        <div class="form-group">
            <label for="popis">Podrobný popis problému:</label>
            <textarea id="popis" name="popis" rows="6" placeholder="Popište prosím problém co nejpodrobněji..." required></textarea>
        </div>

        <div class="form-group">
            <label for="prohlizec">Váš prohlížeč:</label>
            <input type="text" id="prohlizec" name="prohlizec" placeholder="např. Chrome, Firefox, Safari...">
        </div>

        <button type="submit" name="odeslat" class="btn-odeslat">Odeslat hlášení</button>
    </form>

    <?php
    if (isset($_POST['odeslat'])) {
        $jmeno = htmlspecialchars($_POST['jmeno']);
        $email = htmlspecialchars($_POST['email']);
        $typ_problemu = htmlspecialchars($_POST['typ_problemu']);
        $stranka = htmlspecialchars($_POST['stranka']);
        $popis = htmlspecialchars($_POST['popis']);
        $prohlizec = htmlspecialchars($_POST['prohlizec']);
        
        // Zde by byla logika pro uložení do databáze nebo odeslání emailu
        // Pro demonstraci pouze zobrazíme potvrzení
        
        echo '<div class="uspech-zprava">';
        echo '<h3>✅ Děkujeme za nahlášení!</h3>';
        echo '<p>Vaše hlášení bylo úspěšně odesláno. Budeme se snažit problém vyřešit co nejdříve.</p>';
        echo '<p><strong>Shrnutí vašeho hlášení:</strong></p>';
        echo '<ul>';
        echo '<li><strong>Typ problému:</strong> ' . $typ_problemu . '</li>';
        if (!empty($stranka)) {
            echo '<li><strong>Stránka:</strong> ' . $stranka . '</li>';
        }
        echo '<li><strong>Email pro odpověď:</strong> ' . $email . '</li>';
        echo '</ul>';
        echo '</div>';
    }
    ?>

    <div class="kontakt-doplnujici">
        <h3>Další možnosti kontaktu</h3>
        <div class="kontakt-polozky">
            <div class="kontakt-polozka">
                <strong>📧 Email:</strong>
                <p>admin@f1-chila.cz</p>
            </div>
            <div class="kontakt-polozka">
                <strong>⏰ Doba odezvy:</strong>
                <p>Obvykle odpovídáme do 24 hodin</p>
            </div>
            <div class="kontakt-polozka">
                <strong>🔧 Technické problémy:</strong>
                <p>Pro urgentní technické problémy použijte formulář výše</p>
            </div>
        </div>
    </div>
</div>

<style>
.kontakt-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.kontakt-info {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 30px;
}

.kontakt-form {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 12px;
    border: 2px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    transition: border-color 0.3s;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #e10600;
}

.btn-odeslat {
    background: #e10600;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-odeslat:hover {
    background: #c50500;
}

.uspech-zprava {
    background: #d4edda;
    color: #155724;
    padding: 20px;
    border-radius: 8px;
    border: 1px solid #c3e6cb;
    margin: 20px 0;
}

.kontakt-doplnujici {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 8px;
}

.kontakt-polozky {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.kontakt-polozka {
    background: white;
    padding: 15px;
    border-radius: 6px;
    border-left: 4px solid #e10600;
}

.kontakt-polozka strong {
    color: #e10600;
    display: block;
    margin-bottom: 8px;
}

@media (max-width: 768px) {
    .kontakt-container {
        padding: 10px;
    }
    
    .kontakt-form {
        padding: 20px;
    }
    
    .kontakt-polozky {
        grid-template-columns: 1fr;
    }
}
</style>