for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ]; then
        php sortodds.php $f;
    fi
done