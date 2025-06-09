<div class="uvod-header">
    <img src="https://www.formula1.com/content/dam/fom-website/manual/Misc/2023manual/Pre-season/January/GettyImages-1386705161.jpg" alt="Formule 1" class="hero-image">
    <div class="hero-content">
        <h2 style="color: white;">Vítejte ve světě Formule 1</h2>
        <p>Nejrychlejší sport na planetě. Sledujte s námi aktuální dění, výsledky a analýzy.</p>
    </div>
</div>

<div class="novinky">
    <h3>Nejnovější zprávy</h3>
    <div class="novinka">
        <img src="https://1949910950.rsc.cdn77.org/getthumbnail.aspx?q=60&crop=1&h=450&w=800&id_file=710407869" alt="Noris v Monaku" class="novinka-image">
        <div class="novinka-content">
            <h4><a href="./novinky/25.05.2025.php">Verstappen vyhrává v Monaku</a></h4>
            <p>Lando Norris dominoval závodu v Monaku a rozšířil svůj dosah na Piastriho</p>
            <a href="./novinky/25.05.2025.php" class="cist-vice">Číst více</a>
        </div>
    </div>
    
    <div class="novinka">
        <img src="https://media.formula1.com/image/upload/f_auto,c_limit,w_960,q_auto/f_auto/q_auto/fom-website/2024/2026%20regulations/4" alt="F1 2026" class="novinka-image">
        <div class="novinka-content">
            <h4><a href="./novinky/06.05.2024.php">Nové technické předpisy pro 2026</a></h4>
            <p>FIA oznámila změny v technických předpisech pro nadcházející sezónu.</p>
            <a href="./novinky/06.05.2024.php" class="cist-vice">Číst více</a>
        </div>
    </div>
    
    <div class="novinka">
        <img src="https://media.formula1.com/image/upload/f_auto,c_limit,w_960,q_auto/t_16by9North/f_auto/q_auto/trackside-images/2025/F1_Grand_Prix_of_Monaco___Practice/2216647063" alt="Lewis Hamilton a Brad Pitt" class="novinka-image">
        <div class="novinka-content">
            <h4><a href="novinky/06.09.2025.php">Lewis Hamilton: "F1 The Movie bude nejautentičtějším závodním filmem"</a></h4>
            <p>Sedminásobný mistr světa mluví o své roli producenta filmu s Bradem Pittem.</p>
            <a href="novinky/06.09.2025.php" class="cist-vice">Číst více</a>
        </div>
    </div>
</div>

<div class="rychle-odkazy">
    <h3>Rychlé odkazy</h3>
    <div class="odkazy-grid">
        <a href="kalendar.php" class="rychly-odkaz">
            <i class="fa-solid fa-calendar"></i>
            <span>Kalendář závodů</span>
        </a>
        <a href="tymy.php" class="rychly-odkaz">
            <i class="fa-solid fa-users"></i>
            <span>Týmy a jezdci</span>
        </a>
        <a href="vysledky.php" class="rychly-odkaz">
            <i class="fa-solid fa-trophy"></i>
            <span>Výsledky</span>
        </a>
        <a href="statistiky.php" class="rychly-odkaz">
            <i class="fa-solid fa-chart-bar"></i>
            <span>Statistiky</span>
        </a>
    </div>
</div>

<style>
.uvod-header {
    position: relative;
    margin-bottom: 40px;
    border-radius: 10px;
    overflow: hidden;
    height: 300px;
}

.hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.7);
}

.hero-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    z-index: 2;
}

.hero-content h2 {
    font-size: 2.5em;
    margin-bottom: 15px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
}

.hero-content p {
    font-size: 1.2em;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
}

.novinky {
    margin-bottom: 40px;
}

.novinky h3 {
    color: #e10600;
    margin-bottom: 25px;
    font-size: 1.5em;
    border-bottom: 2px solid #e10600;
    padding-bottom: 10px;
}

.novinka {
    display: flex;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.novinka:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.novinka-image {
    width: 200px;
    height: 120px;
    object-fit: cover;
    flex-shrink: 0;
}

.novinka-content {
    padding: 20px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.novinka-content h4 {
    margin-bottom: 10px;
}

.novinka-content h4 a {
    color: #e10600;
    text-decoration: none;
    transition: color 0.3s ease;
}

.novinka-content h4 a:hover {
    color: #c50500;
}

.novinka-content p {
    margin-bottom: 15px;
    color: #666;
    flex: 1;
}

.cist-vice {
    color: #e10600;
    text-decoration: none;
    font-weight: bold;
    align-self: flex-start;
    padding: 8px 15px;
    border: 2px solid #e10600;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.cist-vice:hover {
    background: #e10600;
    color: white;
}

.rychle-odkazy {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 10px;
}

.rychle-odkazy h3 {
    color: #e10600;
    margin-bottom: 25px;
    font-size: 1.5em;
    text-align: center;
}

.odkazy-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.rychly-odkaz {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 25px;
    background: white;
    border-radius: 8px;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.rychly-odkaz:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(225, 6, 0, 0.2);
    color: #e10600;
}

.rychly-odkaz i {
    font-size: 2em;
    margin-bottom: 15px;
    color: #e10600;
}

.rychly-odkaz span {
    font-weight: bold;
    text-align: center;
}

@media (max-width: 768px) {
    .uvod-header {
        height: 200px;
    }
    
    .hero-content h2 {
        font-size: 1.8em;
    }
    
    .hero-content p {
        font-size: 1em;
    }
    
    .novinka {
        flex-direction: column;
    }
    
    .novinka-image {
        width: 100%;
        height: 150px;
    }
    
    .odkazy-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .odkazy-grid {
        grid-template-columns: 1fr;
    }
    
    .rychle-odkazy {
        padding: 20px;
    }
}
</style>