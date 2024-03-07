for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ]; then
        php bets.php $f;
    fi
done