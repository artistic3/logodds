for f in *; do
    if [ -d "$f" ]; then
        php bets.php $f;
    fi
done