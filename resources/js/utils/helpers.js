import Swal from 'sweetalert2';
import dayjs from 'dayjs';
import {ElNotification} from "element-plus";

/**
 *
 * @param {String} timeString
 * @param {String} format
 * @see https://day.js.org/docs/en/display/format
 * @returns {string}
 */
export const formatTime = (timeString, format = 'hh:mm:A') => {

    if (!dayjs(timeString).isValid()) {
        throw new Error('Invalid Timestamp');
    }

    return dayjs(timeString).format(format);
};

export const formatDate = (timeString, format = 'DD-MMM-YYYY') => {
    return formatTime(timeString, format);
};

/**
 *
 * @param { String } timestamp - timestamp
 * @param { Object } config - date time formatter and separator
 * @param { String } config.timeFormat - time formatter
 * @param { String } config.dateFormatter - date formatter
 * @param { String } config.separator - date time separator
 * @see https://day.js.org/docs/en/display/format
 * @return string
 */
export const formatDateTime = (timestamp, config = {}) => {

    const defaultConfig = {
        timeFormat: undefined,
        dateFormat: undefined,
        separator: 'at',
        ...config
    };

    const date = formatDate(timestamp, defaultConfig.dateFormat);
    const time = formatTime(timestamp, defaultConfig.timeFormat);

    return `${ date } ${ defaultConfig.separator } ${ time }`;
};

/**
 * show user a confirmation and then take action based on confirmation
 * @param {{onConfirm: ((function(): Promise<void>)|*)}} config {
 *      @param {String} config.title
 *      @param {String} config.text
 *      @param {String} config.icon
 *      @param {String} config.confirmButtonColor
 *      @param {String} config.cancelButtonColor
 *      @param {String} config.confirmButtonText
 *      @param {Boolean} config.showLoaderOnConfirm
 *      @param {Boolean} config.showCancelButton
 *      @param {Function} config.onConfirm
 *      @param {Function} config.onCancel
 * }
 * @return {Promise<void>}
 */
export const confirmDelete = (config = {}) => {

    const defaultConfig = {
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        showLoaderOnConfirm: true,
        onConfirm: _ => _,
        onCancel: _ => _,
        ...config
    };
    return Swal.fire({
        title: defaultConfig.title,
        text: defaultConfig.text,
        icon: defaultConfig.icon,
        showCancelButton: defaultConfig.showCancelButton,
        confirmButtonColor: defaultConfig.confirmButtonColor,
        cancelButtonColor: defaultConfig.cancelButtonColor,
        confirmButtonText: defaultConfig.confirmButtonText,
        showLoaderOnConfirm: defaultConfig.showLoaderOnConfirm,
        closeOnClickOutside: false,
        allowOutsideClick: () => !Swal.isLoading(),
        backdrop: true,

        preConfirm: async () => {
            if (typeof defaultConfig.onConfirm === 'function') {
                return defaultConfig.onConfirm();
            }
        }
    })
        .then((result) => {
                if (!result.isConfirmed) {
                    defaultConfig.onCancel();
                }
            }
        )
        ;
};

export const notify = (alertType = null, message = null, config = {}) => {
    return ElNotification({
        type: alertType,
        title: message,
        duration: 2000,
        showClose: true,
        ...config
    })
};

export const exportCsv = (data, fName = null) => {

    const fileName = !fName ? 'data.csv' : `${fName}.csv`;

    const rows = [Object.keys(data[0]).join(",")].concat(
        data.map(row =>
            Object.values(row)
                .map(val => `"${val}"`)
                .join(",")
        ));

    let csvContent = rows.join("\n");

    let blob = new Blob([csvContent], {
        type: "text/csv;charset=utf-8;"
    });

    if (navigator.msSaveBlob) {

        navigator.msSaveBlob(blob, fileName);

    } else {

        let link = document.createElement("a");

        if (link.download !== undefined) {
            let url = URL.createObjectURL(blob);
            link.setAttribute("href", url);
            link.setAttribute("download", fileName);
            link.style.visibility = "hidden";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

    }
};
