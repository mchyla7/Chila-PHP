<?php
// Načtení všech článků ze složky novinky
$novinkyDir = './novinky/';
$clanky = array();

if (is_dir($novinkyDir)) {
    $files = scandir($novinkyDir);
    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) == 'php') {
            $filePath = $novinkyDir . $file;
            $content = file_get_contents($filePath);
            
            // Extrakce titulku z H1 tagu
            preg_match('/<h1[^>]*>(.*?)<\/h1>/i', $content, $titleMatch);
            $title = isset($titleMatch[1]) ? strip_tags($titleMatch[1]) : 'Bez názvu';
            
            // Extrakce data z meta informací
            preg_match('/<span class="datum">(.*?)<\/span>/i', $content, $dateMatch);
            $date = isset($dateMatch[1]) ? $dateMatch[1] : 'Neznámé datum';
            
            // Extrakce prvního odstavce
            preg_match('/<p[^>]*><strong>(.*?)<\/strong><\/p>/i', $content, $excerptMatch);
            if (!isset($excerptMatch[1])) {
                preg_match('/<p[^>]*>(.*?)<\/p>/i', $content, $excerptMatch);
            }
            $excerpt = isset($excerptMatch[1]) ? strip_tags($excerptMatch[1]) : 'Bez popisu';
            
            // Omezení délky výňatku
            if (strlen($excerpt) > 150) {
                $excerpt = substr($excerpt, 0, 150) . '...';
            }
            
            $clanky[] = array(
                'file' => $file,
                'title' => $title,
                'date' => $date,
                'excerpt' => $excerpt,
                'timestamp' => filemtime($filePath)
            );
        }
    }
}

// Seřazení článků podle data (nejnovější první)
usort($clanky, function($a, $b) {
    return $b['timestamp'] - $a['timestamp'];
});
?>

<div class="novinky-container">
    <div class="novinky-header">
        <h1>📰 Nejnovější zprávy ze světa F1</h1>
        <p>Sledujte s námi aktuální dění, výsledky a analýzy z královny motorsportu</p>
    </div>

    <div class="novinky-grid">
        <?php if (empty($clanky)): ?>
            <div class="no-articles">
                <h3>Zatím žádné články</h3>
                <p>Články se zobrazí automaticky po jejich vytvoření ve složce novinky.</p>
            </div>
        <?php else: ?>
            <?php foreach ($clanky as $clanek): ?>
                <article class="novinka-card">
                    <div class="card-header">
                        <span class="datum-badge"><?php echo htmlspecialchars($clanek['date']); ?></span>
                    </div>
                    <div class="card-content">
                        <h2><a href="novinky/<?php echo htmlspecialchars($clanek['file']); ?>"><?php echo htmlspecialchars($clanek['title']); ?></a></h2>
                        <p class="excerpt"><?php echo htmlspecialchars($clanek['excerpt']); ?></p>
                        <a href="novinky/<?php echo htmlspecialchars($clanek['file']); ?>" class="cist-dale">Číst dále →</a>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <div class="novinky-footer">
        <p>Máte tip na zajímavou zprávu? <a href="mailto:redakce@f1-chila.cz">Napište nám!</a></p>
    </div>
</div>

<style>
body {
    background-image: url('https://media.formula1.com/image/upload/f_auto,c_limit,w_960,q_auto/t_16by9North/f_auto/q_auto/trackside-images/2025/F1_Grand_Prix_of_Monaco___Practice/2216647063');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    position: relative;
}

body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('https://media.formula1.com/image/upload/f_auto,c_limit,w_960,q_auto/t_16by9North/f_auto/q_auto/trackside-images/2025/F1_Grand_Prix_of_Monaco___Practice/2216647063');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    filter: blur(8px);
    opacity: 0.3;
    z-index: -2;
}

body::after {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.8);
    z-index: -1;
}

.novinky-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    position: relative;
    z-index: 1;
}

.novinky-header {
    text-align: center;
    margin-bottom: 40px;
    background: rgba(255, 255, 255, 0.95);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    backdrop-filter: blur(5px);
}

.novinky-header h1 {
    color: #e10600;
    font-size: 2.2em;
    margin-bottom: 15px;
    text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.8);
}

.novinky-header p {
    color: #666;
    font-size: 1.1em;
    margin: 0;
}

.novinky-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 25px;
    margin-bottom: 40px;
}

.novinka-card {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.novinka-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(225, 6, 0, 0.2);
}

.card-header {
    background: linear-gradient(135deg, #e10600, #ff4444);
    padding: 15px 20px;
    position: relative;
}

.datum-badge {
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.9em;
    font-weight: bold;
    backdrop-filter: blur(10px);
}

.card-content {
    padding: 25px;
}

.card-content h2 {
    margin: 0 0 15px 0;
    font-size: 1.3em;
    line-height: 1.4;
}

.card-content h2 a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.card-content h2 a:hover {
    color: #e10600;
}

.excerpt {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
    text-align: justify;
}

.cist-dale {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #e10600;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;
    border: 2px solid #e10600;
    border-radius: 25px;
    transition: all 0.3s ease;
    background: transparent;
}

.cist-dale:hover {
    background: #e10600;
    color: white;
    transform: translateX(5px);
}

.no-articles {
    grid-column: 1 / -1;
    text-align: center;
    background: rgba(255, 255, 255, 0.9);
    padding: 50px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.no-articles h3 {
    color: #e10600;
    margin-bottom: 15px;
    font-size: 1.5em;
}

.no-articles p {
    color: #666;
    font-size: 1.1em;
}

.novinky-footer {
    text-align: center;
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    backdrop-filter: blur(5px);
}

.novinky-footer p {
    margin: 0;
    color: #666;
}

.novinky-footer a {
    color: #e10600;
    text-decoration: none;
    font-weight: bold;
}

.novinky-footer a:hover {
    text-decoration: underline;
}

/* Animace při načítání */
.novinka-card {
    opacity: 0;
    animation: fadeInUp 0.6s ease forwards;
}

.novinka-card:nth-child(1) { animation-delay: 0.1s; }
.novinka-card:nth-child(2) { animation-delay: 0.2s; }
.novinka-card:nth-child(3) { animation-delay: 0.3s; }
.novinka-card:nth-child(4) { animation-delay: 0.4s; }
.novinka-card:nth-child(5) { animation-delay: 0.5s; }
.novinka-card:nth-child(6) { animation-delay: 0.6s; }

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responzivní design */
@media (max-width: 768px) {
    .novinky-container {
        padding: 15px;
    }
    
    .novinky-header {
        padding: 20px;
    }
    
    .novinky-header h1 {
        font-size: 1.8em;
    }
    
    .novinky-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .card-content {
        padding: 20px;
    }
    
    .card-content h2 {
        font-size: 1.2em;
    }
}

@media (max-width: 480px) {
    body::before {
        background-attachment: scroll;
    }
    
    .novinky-header h1 {
        font-size: 1.5em;
    }
    
    .novinky-header p {
        font-size: 1em;
    }
    
    .card-content {
        padding: 15px;
    }
    
    .cist-dale {
        padding: 8px 16px;
        font-size: 0.9em;
    }
}

/* Efekt hover pro celou kartu */
@media (hover: hover) {
    .novinka-card:hover .card-content h2 a {
        color: #e10600;
    }
}
</style>